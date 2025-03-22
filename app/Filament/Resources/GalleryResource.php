<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\GalleryResource\Pages;
    use App\Filament\Resources\GalleryResource\RelationManagers;
    use App\Models\Gallery;
    use Filament\Forms;
    use Filament\Forms\Form;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;

    class GalleryResource extends Resource
    {
        protected static ?string $model = Gallery::class;

        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\SpatieMediaLibraryFileUpload::make('gallery')
                        ->image()
                        ->imageEditor()
                        ->panelLayout('grid')
                        ->reorderable()
                        ->multiple()
                        ->columnSpanFull()
                        ->collection('gallery'),

                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(191),

                    Forms\Components\Textarea::make('description')
                        ->autosize()
                        ->rows(4)
                        ->cols(80)
                        ->columnSpanFull(),
                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    Tables\Columns\TextColumn::make('title')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('created_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('updated_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                ])
                ->filters([
                    //
                ])
                ->actions([
                    Tables\Actions\EditAction::make(),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                    ]),
                ]);
        }

        public static function getRelations(): array
        {
            return [
                //
            ];
        }

        public static function getPages(): array
        {
            return [
                'index' => Pages\ListGalleries::route('/'),
                'create' => Pages\CreateGallery::route('/create'),
                'edit' => Pages\EditGallery::route('/{record}/edit'),
            ];
        }
    }
