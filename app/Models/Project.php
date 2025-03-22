<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Spatie\Tags\HasTags;

    class Project extends Model implements HasMedia
    {
        /** @use HasFactory<\Database\Factories\ProjectFactory> */
        use HasFactory, InteractsWithMedia, HasTags;

        protected $fillable = [
            "title",
            "slug",
            "description",
            "content",
            "project_date",
            "location",
            "customer"
        ];

        public function registerMediaCollections(): void
        {
            $this
                ->addMediaCollection('project')
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

                    $this
                        ->addMediaConversion('screen')
                        ->width(1980)
                        ->height(1080);

                });
        }

        protected function casts(): array
        {
            return [
                'project_date' => 'datetime'
            ];
        }

    }
