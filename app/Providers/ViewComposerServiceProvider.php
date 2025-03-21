<?php

    namespace App\Providers;

    use App\Composer\NavigationComposer;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\ServiceProvider;

    class ViewComposerServiceProvider extends ServiceProvider
    {
        /**
         * Register services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap services.
         */
        public function boot(): void
        {

            View::composer(["*"], NavigationComposer::class);
        }
    }
