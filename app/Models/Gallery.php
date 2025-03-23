<?php

    namespace App\Models;

    use App\Traits\HasMediaDimensions;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Spatie\Image\Enums\Fit;
    use Spatie\Image\Image;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class Gallery extends Model implements HasMedia
    {
        /** @use HasFactory<\Database\Factories\GalleryFactory> */
        use HasFactory, InteractsWithMedia, HasMediaDimensions;

        protected $fillable = [
            "title",
            "description",
        ];

        public function registerMediaCollections(): void
        {
            $this
                ->addMediaCollection('gallery')
                ->registerMediaConversions(function (Media $media) {
                    // Load image dimensions
                    $image = Image::load($media->getPath());
                    $originalWidth = $image->getWidth();
                    $originalHeight = $image->getHeight();

                    $isPortrait = $originalHeight > $originalWidth; // Check orientation

                    // Define fixed width
                    $thumbWidth = 250;
                    $cardWidth = 600;
                    $screenWidth = 1600;

                    // Adjust height dynamically while keeping aspect ratio
                    $thumbHeight = intval(($thumbWidth / $originalWidth) * $originalHeight);
                    $cardHeight = intval(($cardWidth / $originalWidth) * $originalHeight);
                    $screenHeight = intval(($screenWidth / $originalWidth) * $originalHeight);

                    if ($isPortrait) {
                        // Swap width and height for portrait images
                        list($thumbWidth, $thumbHeight) = [$thumbHeight, $thumbWidth];
                        list($cardWidth, $cardHeight) = [$cardHeight, $cardWidth];
                        list($screenWidth, $screenHeight) = [$screenHeight, $screenWidth];
                    }

                    // Apply conversions while keeping original orientation
                    $this
                        ->addMediaConversion('thumb')
                        ->fit(Fit::Contain, $thumbWidth, $thumbHeight) // Keep original orientation
                        ->format('webp');

                    $this
                        ->addMediaConversion('card')
                        ->fit(Fit::Contain, $cardWidth, $cardHeight)
                        ->format('webp');

                    $this
                        ->addMediaConversion('screen')
                        ->fit(Fit::Contain, $screenWidth, $screenHeight)
                        ->format('webp');
                });

        }

        protected function casts(): array
        {
            return [
                'gallery' => 'array',
            ];
        }

    }
