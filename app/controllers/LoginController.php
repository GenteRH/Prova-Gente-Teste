<?php

class LoginController extends \BaseController {

    public function postLogin()
    {
        $user = array(
            'use_email'   => Input::get('use_email'),
            'use_password'   => Input::get('use_password')
        );
        
        //tenta logar o usuário
        if (Auth::attempt($user)) {
            return Redirect::to('home');
        }
        else {
            return Redirect::to('login')->withErrors('Usuário ou Senha Inválido');
        }
    }
}