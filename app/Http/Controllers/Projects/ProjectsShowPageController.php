<?php

    namespace App\Http\Controllers\Projects;

    use App\Http\Controllers\Controller;
    use App\Models\Project;
    use Illuminate\View\View;

    class ProjectsShowPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Project $project): View
        {
            return view('pages.projects.show', [
                'project' => $project,
                'meta' => [
                    'title' => 'Projects Show',
                ]
            ]);
        }
    }
