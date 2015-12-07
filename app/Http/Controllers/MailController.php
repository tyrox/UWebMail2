<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailUpdateRequest;
use App\Http\Requests\MailCreateRequest;
use Mail;
use App\Correo;
use Session;
use Redirect;
use View;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $correos = \App\Correo::All();
        return View('emails.pendiente', compact('correos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //se crea la vista para correo
        return View('emails.correo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MailCreateRequest $request)
    {
        Correo::create([
            'email' => $request['email'],
            'subject' => $request['subject'],
            'content' => $request['content']
            ]);

        Mail::send('emails.machote',$request->all(), function($msj)use ($request) {
            $msj->subject($request->subject);
            $msj->to($request->email);
            $msj->to($request->email);
        });
        Session::flash('message','Mensahe enviado correctamente');
        return Redirect('/mail')->with('message', 'store');
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
    public function update(MailUpdateRequest $request, $id)
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
