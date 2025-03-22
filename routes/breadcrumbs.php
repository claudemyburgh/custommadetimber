<?php

    use App\Models\Gallery;
    use App\Models\Project;
    use Diglactic\Breadcrumbs\Breadcrumbs;
    use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

    Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
        $trail->push('Home', route('home'));
    });

    Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Contact Us', route('contact-us'));
    });

    Breadcrumbs::for('galleries', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Galleries', route('galleries.index'));
    });

    Breadcrumbs::for('gallery', function (BreadcrumbTrail $trail, Gallery $gallery) {
        $trail->parent('galleries');
        $trail->push($gallery->title, route('galleries.show', $gallery));
    });

    Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Latest Projects', route('projects.index'));
    });

    Breadcrumbs::for('project', function (BreadcrumbTrail $trail, Project $project) {
        $trail->parent('projects');
        $trail->push('Latest Projects', route('projects.index', $project));
    });

    Breadcrumbs::for('catalog', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Catalog', route('catalogs.index'));
    });


    Breadcrumbs::for('cookie-policy', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Cookie Policy', route('cookie-policy'));
    });

    Breadcrumbs::for('privacy-policy', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Privacy Policy', route('privacy-policy'));
    });

    Breadcrumbs::for('terms-of-service', function (BreadcrumbTrail $trail) {
        $trail->parent('home');
        $trail->push('Terms of Service', route('terms-of-service'));
    });
