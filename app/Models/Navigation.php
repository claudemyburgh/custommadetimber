<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Sushi\Sushi;

    class Navigation extends Model
    {
        use Sushi;

        protected array $rows = [
            [
                'name' => 'Home',
                'route' => 'home',
            ],
            [
                'name' => 'Catalog',
                'route' => 'catalogs.index',
            ],
            [
                'name' => 'Latest Projects',
                'route' => 'projects.index',
            ],
            [
                'name' => 'Gallery',
                'route' => 'gallery.index',
            ],
            [
                'name' => 'Contact Us',
                'route' => 'contact-us',
            ],
        ];
    }
