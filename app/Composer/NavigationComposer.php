<?php

    namespace App\Composer;

    use App\Models\Navigation;
    use Illuminate\View\View;

    class NavigationComposer
    {

        public function compose(View $view): void
        {
            $view->with("menu", Navigation::get());
        }
    }
