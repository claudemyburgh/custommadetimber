<?php

    namespace App\Http\Controllers\Galleries;

    use App\Http\Controllers\Controller;
    use App\Models\Gallery;
    use Illuminate\View\View;
    use function view;

    class GalleriesShowPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Gallery $gallery): View
        {
            return view('pages.galleries.show', [
                'gallery' => $gallery,
                'meta' => [
                    'title' => 'Terms of Service',
                ]
            ]);
        }
    }
