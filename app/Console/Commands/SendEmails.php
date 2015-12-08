<?php

namespace App\Console\Commands;
use DB;
use App\Correo;
use Illuminate\Console\Command;
use Session;
use Redirect;
use View;
use Auth;
use Mail;


class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send e-mails to a user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $correos = Correo::All();
        foreach ($correos as $correo) {
            # code...
            if ($correo->status == '0') {
                # code...

                $datos= array('email'=>$correo->email, 'subject'=>$correo->subject, 
                    'content'=>$correo->content, 'id'=>$correo->id);
                
                Mail::send('mail.machote',$datos, function($msj)use ($datos) {
                    $msj->subject($datos['subject']);
                    $msj->to($datos['email']);
                });
                DB::table('correo')->where('id', $datos['id'])->update(['status'=>1]);
                sleep(5);
            
            }
        }
        
    }
}
