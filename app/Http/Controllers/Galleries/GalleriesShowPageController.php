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


            $mediaWithSizes = $gallery->getMediaWithDimensions('gallery', ['screen', 'card']);


            return view('pages.galleries.show', [
                'gallery' => $gallery,
                'mediaWithSizes' => $mediaWithSizes,
                'meta' => [
                    'title' => 'Terms of Service',
                ]
            ]);
        }
    }
