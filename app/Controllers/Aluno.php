<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Aluno extends BaseController
{
    public function veraluno( string $veraluno = 'Página de visualização do aluno')
    {

        $data['title'] = ucfirst($veraluno);

        return view('templates/header', $data).
            view ('veraluno').
            view('templates/footer');
    }
}
