<?php

    namespace App\Http\Controllers;

    use Illuminate\View\View;

    class HomePageIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.index', [
                "meta" => [
                    "title" => "Home Page",
                    "description" => "Home Page description"
                ]
            ]);
        }
    }
