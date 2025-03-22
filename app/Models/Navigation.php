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
                'active' => '/'
            ],
//            [
//                'name' => 'Catalog',
//                'route' => 'catalogs.index',
//                'active' => 'catalog*'
//            ],
            [
                'name' => 'Latest Projects',
                'route' => 'projects.index',
                'active' => 'latest-projects*'
            ],
            [
                'name' => 'Gallery',
                'route' => 'galleries.index',
                'active' => 'galler*'
            ],
            [
                'name' => 'Contact Us',
                'route' => 'contact-us',
                'active' => 'contact-us'
            ],
        ];
    }
