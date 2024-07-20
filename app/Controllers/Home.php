<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'UTOPIA TRAVEL';
        return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/inicio') . view('plantillas/footer');
    }

    public function ver_quienes_somos()
    {
        $data['titulo'] = 'Quienes Somos';
        return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/quienesomos') . view('plantillas/footer');
    }

    public function ver_contacto()
    {
        $data['titulo'] = 'Contacto';
        return view('plantillas/head', $data) . view('plantillas/navbar') . view('frontend/contacto') . view('plantillas/footer');
    }
}