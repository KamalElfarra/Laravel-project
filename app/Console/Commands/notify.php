<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send anotify message for wroks company every day';

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
        $user=User::select('email')->get();
//        $data=['title'=>'Laravel To Send Email','content'=>'this is my email'];
        foreach ($user as $s){

            Mail::to($s)->send(new \App\Mail\Notify);


        }

    }
}
