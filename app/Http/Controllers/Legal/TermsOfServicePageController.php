<?php

    namespace App\Http\Controllers\Legal;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;

    class TermsOfServicePageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.legal.terms-of-service', [
                'meta' => [
                    'title' => 'Terms of Service',
                ]
            ]);
        }
    }
