<?php

    namespace App\Http\Controllers\Galleries;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;
    use function view;

    class GalleriesShowPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.galleries.show', [
                'meta' => [
                    'title' => 'Terms of Service',
                ]
            ]);
        }
    }
