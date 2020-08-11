<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118123',
                'name' => 'Silvinia Nur Aisyah',
                'gender' => 'Perempuan',
                'phone' => '+62 85643371392',
                'class' => 'XII RPL 4'];
    }
}
