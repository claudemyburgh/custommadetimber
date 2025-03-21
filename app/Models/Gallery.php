<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class Gallery extends Model implements HasMedia
    {
        /** @use HasFactory<\Database\Factories\GalleryFactory> */
        use HasFactory, InteractsWithMedia;

        protected $fillable = [
            "title",
            "description",
        ];

        public function registerMediaCollections(): void
        {
            $this
                ->addMediaCollection('gallery')
//                ->useFallbackUrl('/default_avatar.jpg')
//                ->useFallbackUrl('/default_avatar_thumb.jpg', 'thumb')
//                ->useFallbackPath(public_path('/default_avatar.jpg'))
//                ->useFallbackPath(public_path('/default_avatar_thumb.jpg'), 'thumb')
                ->registerMediaConversions(function (Media $media) {
                    $this
                        ->addMediaConversion('thumb')
                        ->width(250)
                        ->height(250);

                    $this
                        ->addMediaConversion('card')
                        ->width(600)
                        ->height(600);

                });
        }

        protected function casts(): array
        {
            return [
                'gallery' => 'array',
            ];
        }

    }
