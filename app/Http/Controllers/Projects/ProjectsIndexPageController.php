<?php

    namespace App\Http\Controllers\Projects;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;
    use function view;

    class ProjectsIndexPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.projects.index', [
                'meta' => [
                    'title' => 'Latest Projects',
                ]
            ]);
        }
    }
