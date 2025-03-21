<?php

    namespace App\Http\Controllers\Catalogs;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class CatalogsShowController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Request $request): View
        {
            return view('pages.catalogs.show', [
                'meta' => [
                    'title' => 'Catalog Show',
                ]
            ]);
        }
    }
