<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class schedual extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    // the name of the user who will send to him the email
    protected $signature = 'user:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire user automatically every 5 minute';

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
      $user=User::where("expire",0)->get(); // collect of users who are actives
      //get the user and when the the user was expire send to him a message
       foreach ($user as $u){

           $u->update(['expire'=>1]);

       }

       //after that we will go to the kernel.php to connect this schedule
    }
}
