<?php

    namespace App\Http\Controllers\Projects;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;

    class ProjectsShowPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.projects.show', [
                'meta' => [
                    'title' => 'Projects Show',
                ]
            ]);
        }
    }
