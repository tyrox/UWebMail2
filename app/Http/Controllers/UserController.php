<?php

namespace App\Http\Controllers;

use Session;
use DB;
use View;
use Mail;
use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RedirectsUsers;

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
    public  function  authenticate($id)
    {
        # code...
        $user = DB::table('users')->select('id')->where('_token', '=', $id)->get();

        foreach ($user as $user0) {
            # Verifico que haya encontrado al usuario.
            if ($user0->id > 0) {
                # Ingresa si se encontró el usuario.
                DB::table('users')->where('_token', $id)->update(array('status' => '1'));

                Session::flash('message','Usuario activado');
                return Redirect('/')->with('message', 'authenticate');
            }

        }
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
            'password' => bcrypt ($request['password']),
            '_token' => $request['_token']
            ]); 

        Mail::send('auth.forms.usrCorreo',$request->all(), function($msj)use ($request) {
            $msj->subject('Activate your UWebMail account to start sending email');            
            $msj->to($request->email);
        });
        Session::flash('message','Usuario creado');   
        return Redirect('/')->with('message', 'store');
        
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
