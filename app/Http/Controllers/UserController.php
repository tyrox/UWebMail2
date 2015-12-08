<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Mail;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return View::make('auth.l_register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('auth.l_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'user' => $request['user'],
            'email' => $request['email'],
            'password' => bcrypt ($request['password'])
            ]);

        Mail::send('auth.forms.usrCorreo',$request->all(), function($msj)use ($request) {
            $msj->subject('Activate your UWebMail account to start sending email');            
            $msj->to($request->email);
        });
           
        return View('auth.l_login');
        /*
        $inputs = Input::all();

        $reglas = array(
            'name' => 'required|min:5|max:100',
            'user' => 'required|min:5|max:20|unique:Usuario,User',
            'email' => 'required|email|min:6|max:100',
            'password' => 'required|min:5|max:20',
            'rpassword' => 'required|same:password',
            );

        $mensajes = array(
            'required' => '*'
        );

        $validar = Validator::make($inputs, $reglas, $mensajes);
        if ($validar->fails()) {
            # code...
            return Redirect::back()->withErrors($validar);
        }
        else {
            //se crea nuevo usuario y se agrega a la base de datos
            /*$usuario = new User;

            $usuario->Name = Input::get('name');
            $usuario->User = Input::get('user');
            $usuario->email = Input::get('email');
            $usuario->Password = Input::get('password');
            
            $datos= array(
                'name'=> 'name',
                'email'=> 'tyron.js@gmail.com',
                'subject'=> 'Suscription UWebMail',
                'msj'=> 'Thank you! \n
                    Welcome to our WebMail.',
                );
            $message = null;
            $fromEmail = 'tyrox@live.com';
            $fromName = 'Soy tu padre'; 
            //$usuario->save();
            Mail::send('email.test', $datos, function($message)
            {
                $message->to('payacson@gmail.com');
                //$message->from($fromEmail);
                $message->subject('Nuevo msj de contacto');

                //$message->to(Input::get('email'))->subject('Suscription');
                //$message->to('tyron.js@gmail.com', 'some guy')->subject('Suscription');
            });
            return View('Bindex');
    }
    */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
