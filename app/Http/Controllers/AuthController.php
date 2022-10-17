<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 1234567,
            'Nama' => 'Veo Rozzan',
            'Phone' => '083844777717',
            'Class' => 'XII RPL 6'
        ];
    }
}
