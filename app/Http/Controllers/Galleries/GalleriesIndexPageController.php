<?php

    namespace App\Http\Controllers\Galleries;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;
    use function view;

    class GalleriesIndexPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.galleries.index', [
                'meta' => [
                    'title' => 'Galleries',
                ]
            ]);
        }
    }
