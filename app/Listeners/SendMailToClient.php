<?php

    namespace App\Listeners;

    use App\Events\SendEmailEvent;
    use App\Mail\SendToClient;
    use Illuminate\Mail\Mailables\Address;
    use Illuminate\Support\Facades\Mail;

    class SendMailToClient
    {
        /**
         * Create the event listener.
         */
        public function __construct()
        {
            //
        }

        /**
         * Handle the event.
         */
        public function handle(SendEmailEvent $event): void
        {
            Mail::to(
                new Address(
                    $event->data['email'],
                    $event->data['first_name']
                ))->queue(new SendToClient((array)$event));
        }
    }
