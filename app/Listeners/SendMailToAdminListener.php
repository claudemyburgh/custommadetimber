<?php

    namespace App\Listeners;

    use App\Events\SendEmailEvent;
    use App\Mail\SendToAdmin;
    use Illuminate\Mail\Mailables\Address;
    use Illuminate\Support\Facades\Mail;
    use function config;

    class SendMailToAdminListener
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

            Mail::to(new Address(config('mail.from.address'), config('mail.from.name')))
                ->queue(new SendToAdmin((array)$event));
        }
    }
