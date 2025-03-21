<?php

    namespace App\Http\Controllers\Legal;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;

    class CookiePolicyPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.legal.cookie-policy', [
                'meta' => [
                    'title' => 'Cookie Policy',
                ]
            ]);
        }
    }
