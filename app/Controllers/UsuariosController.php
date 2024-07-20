<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function ver_registrarse()
    {
        $data['titulo'] = 'Registrarse';
        return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/registrarse') . view('plantillas/footer');
    }

    public function ver_iniciar_sesion()
    {
        $data['titulo'] = 'Iniciar Sesión';
        return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/login') . view('plantillas/footer');
    }

    public function agregar_usuario()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $Usuarios_Model = new UsuariosModel();

        $validation->setRules(
            [
                'nombre' => 'required|max_length[50]',
                'apellido' => 'required|max_length[50]',
                'email' => 'required|valid_email|is_unique[usuarios.email_usuario]',
                'password' => 'required|max_length[15]|min_length[6]',
                'passconf' => 'required|max_length[15]|matches[password]',
            ],
            [
                'nombre' => [
                    'required' => 'El nombre es obligatorio',
                    'max_length' => 'Ha superado el maximo de caracteres (50)'
                ],
                'apellido' => [
                    'required' => 'El apellido es  obligatorio',
                    'max_length' => 'Ha superado el maximo de caracteres (50)'
                ],
                'email' => [
                    'required' => 'El email es obligatorio',
                    'valid_email' => 'Tiene que ser un correo valido',
                    'is_unique' => 'El correo electrónico ya está registrado',
                ],
                'password' => [
                    'required' => 'La contraseña es obligatoria',
                    'max_length' => 'Has superado el máximo de caracteres (15)',
                    'min_length' => 'La contraseña debe tener mínimo 6 caracteres'
                ],
                'passconf' => [
                    'required' => 'La contraseña es obligatoria',
                    'max_length' => 'Has superado el máximo de caracteres (15)',
                    'min_length' => 'La contraseña debe tener minimo 6 caracteres',
                    'matches' => 'Las contraseñas no coinciden'
                ]
            ]
        );

        //Mostrar un error si TODOS los campos estan vacíos
        $campos = [
            'nombre' => $request->getPost('nombre'),
            'apellido' => $request->getPost('apellido'),
            'email' => $request->getPost('email'),
            'password' => $request->getPost('password'),
            'passconf' => $request->getPost('passconf')
        ];

        // Verificar si todos los campos están vacíos
        $campos_vacios = array_filter($campos, function ($valor) {
            return empty($valor);
        });

        if (count($campos_vacios) === count($campos)) {
            return redirect()->route('registrarse')->with('error', 'Debe completar todos los campos');
        }

        //si estan correctos los datos, insertar en la base de datos
        if ($validation->withRequest($request)->run()) {
            $data = [
                'nombre_usuario' => $request->getPost('nombre'),
                'apellido_usuario' => $request->getPost('apellido'),
                'email_usuario' => $request->getPost('email'),
                'password_usuario' => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
                'estado_usuario' => 0,
                'perfil_id' => 2,

            ];
            //insertar en la tabla mensajes
            $Usuarios_Model->insert($data);

            return redirect()->route('registrarse')->with('mensaje', 'Ya estás registrado. Por favor, inicia sesión.');
        } else {
            $data['titulo'] = 'Registrarse';
            $data['validation'] = $validation->getErrors();

            return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/registrarse', $data) . view('plantillas/footer');
        }
    }

    public function buscar_cuenta()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        // Define las reglas y mensajes de validación para los campos del formulario
        $validation->setRules(
            [
                'email' => 'required|valid_email',
                'password' => 'required|max_length[15]|min_length[6]'
            ],
            [
                'email' => [
                    'required' => 'El email es obligatorio',
                    'valid_email' => 'La direccion de correo electronico debe ser valida'
                ],
                'password' => [
                    'required' => 'La contraseña es obligatoria',
                    'max_length' => 'Has superado el máximo de caracteres (15)',
                    'min_length' => 'La contraseña debe tener mínimo 6 caracteres'
                ]
            ]
        );
        $campos = [
            'email' => $request->getPost('email'),
            'password' => $request->getPost('password'),
        ];

        // Verificar si todos los campos están vacíos
        $campos_vacios = array_filter($campos, function ($valor) {
            return empty($valor);
        });

        if (count($campos_vacios) === count($campos)) {
            return redirect()->route('iniciarsesion')->with('error', 'Debe completar todos los campos');
        }

        // Verifica si la validación se cumple
        if ($validation->withRequest($request)->run()) {
            $Usuarios_Model = new UsuariosModel();

            $email = $request->getPost('email');
            $password = $request->getPost('password');

            $usuarioEncontrado = $Usuarios_Model->where('email_usuario', $email)->first();

            if (!$usuarioEncontrado) {
                return redirect()->route('iniciarsesion')->with('error', 'Usuario no registrado.');
            } else {
                if (
                    password_verify($password, $usuarioEncontrado['password_usuario']) ||
                    $password === $usuarioEncontrado['password_usuario']
                ) {
                    $session = session();
                    $data = [
                        'id' => $usuarioEncontrado['id_usuario'],
                        'nombre' => $usuarioEncontrado['nombre_usuario'],
                        'apellido' => $usuarioEncontrado['apellido_usuario'],
                        'email' => $usuarioEncontrado['email_usuario'],
                        'perfil_id' => $usuarioEncontrado['perfil_id'],
                        'login' => true,
                    ];
                    $session->set($data);
                    return redirect()->route('/');
                }
            }
        } else {
            $data['titulo'] = 'Iniciar Sesion';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/login', $data) . view('plantillas/footer');
        }

    }

    public function alta_Usuario($id) {
        $usuario_Model = new UsuariosModel(); 
        $usuario = $usuario_Model->find($id);

        if ($usuario && $usuario['estado_usuario'] == 0) {
            $usuario_Model->update($id, ['estado_usuario' => 1]);
            return redirect()->to('verusuarios')->with('mensaje', 'Usuario de Alta');
        } else {
            return redirect()->to('verusuarios')->with('error', 'Usuario no encontrado');
        }
    }

    public function baja_Usuario($id) {
        $usuario_Model = new UsuariosModel(); 
        $usuario = $usuario_Model->find($id);

        if ($usuario && $usuario['estado_usuario'] > 0) {
            $usuario_Model->update($id, ['estado_usuario' => 0]);
            return redirect()->to('verusuarios')->with('mensaje', 'Usuario de Baja');
        } else {
            return redirect()->to('verusuarios')->with('error', 'Usuario no encontrado');
        }
    }

    public function cerrar_sesion()
    {
        $session = session();
        $session->destroy();
        return redirect()->route('iniciarsesion');
    }
}
