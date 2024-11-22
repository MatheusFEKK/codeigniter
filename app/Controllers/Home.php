<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function aluno()
    {
        $data['title'] = 'Página do Aluno';

        return view('templates/header', $data).
            view ('aluno').
            view ('templates/footer');
    }

    public function produto()
    {
        $data['title'] = 'Página de Produto';
        return view('templates/header', $data).
            view ('produto').
            view ('templates/footer');
    }


}

