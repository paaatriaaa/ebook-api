<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120174,
            'Name' => 'Patria Nugrahadi',
            'Phone' => '0895388827333',
            'Class' => 'XII RPL 5'
        ];
    }
}
