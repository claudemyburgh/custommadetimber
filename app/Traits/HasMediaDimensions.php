<?php

    namespace App\Traits;

    use Illuminate\Support\Collection;
    use Spatie\Image\Image;


    trait HasMediaDimensions
    {
        /**
         * Retrieve media items with width and height for given conversions.
         *
         * @param string $collection Collection name (e.g., 'gallery')
         * @param array $conversions List of conversions to get dimensions for (e.g., ['screen', 'card'])
         *
         * @return \Illuminate\Support\Collection
         * @throws \Spatie\Image\Exceptions\CouldNotLoadImage
         */
        public function getMediaWithDimensions(string $collection, array $conversions): Collection
        {
            return $this->getMedia($collection)->map(function ($media) use ($conversions) {
                $sizes = [];

                foreach ($conversions as $conversion) {
                    $imagePath = $media->getPath($conversion);

                    if (file_exists($imagePath)) {
                        $image = Image::load($imagePath);
                        $sizes[$conversion] = [
                            'width' => $image->getWidth(),
                            'height' => $image->getHeight(),
                            'url' => $media->getFullUrl($conversion),
                        ];
                    }
                }

                return [
                    'media' => $media,
                    'sizes' => $sizes,
                ];
            });
        }
    }
