<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeNewUserMail;
use App\Events\NewCustomerHasRegisteredEvent; 
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewCustomerListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        $employee = $event->employee;
sleep(10);
        // Send the welcome email
        Mail::to($employee->email)->send(new WelcomeNewUserMail());
        
    }
}
