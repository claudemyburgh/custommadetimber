<?php

    use App\Http\Controllers\Catalogs\CatalogsIndexController;
    use App\Http\Controllers\ContactUsPageController;
    use App\Http\Controllers\Galleries\GalleriesIndexPageController;
    use App\Http\Controllers\Galleries\GalleriesShowPageController;
    use App\Http\Controllers\HomePageIndexController;
    use App\Http\Controllers\Legal\CookiePolicyPageController;
    use App\Http\Controllers\Legal\PrivacyPolicyPageController;
    use App\Http\Controllers\Legal\TermsOfServicePageController;
    use App\Http\Controllers\Projects\ProjectsIndexPageController;
    use App\Http\Controllers\Projects\ProjectsShowPageController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', HomePageIndexController::class)->name('home');

    Route::get('/privacy-policy', PrivacyPolicyPageController::class)->name('privacy-policy');
    Route::get('/terms-of-service', TermsOfServicePageController::class)->name('terms-of-service');
    Route::get('/cookie-policy', CookiePolicyPageController::class)->name('cookie-policy');

    Route::get('/gallery', GalleriesIndexPageController::class)->name('galleries.index');
    Route::get('/gallery/{gallery}', GalleriesShowPageController::class)->name('galleries.show');
    Route::get('/catalog', CatalogsIndexController::class)->name('catalogs.index');
    Route::get('/latest-projects', ProjectsIndexPageController::class)->name('projects.index');
    Route::get('/latest-projects/{project:slug}', ProjectsShowPageController::class)->name('projects.show');
    Route::get('contact-us', ContactUsPageController::class)->name('contact-us');


