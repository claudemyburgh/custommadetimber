<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\ProjectResource\Pages;
    use App\Filament\Resources\ProjectResource\RelationManagers;
    use App\Models\Project;
    use Filament\Forms;
    use Filament\Forms\Components\SpatieTagsInput;
    use Filament\Forms\Form;
    use Filament\Forms\Set;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;
    use Illuminate\Support\Str;

    class ProjectResource extends Resource
    {
        protected static ?string $model = Project::class;

        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

        public static function form(Form $form): Form
        {
            return $form
                ->schema([

                    Forms\Components\SpatieMediaLibraryFileUpload::make('project')
                        ->image()
                        ->imageEditor()
                        ->panelLayout('grid')
                        ->reorderable()
                        ->multiple()
                        ->columnSpanFull()
                        ->collection('project'),


                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->maxLength(191),

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(191),

                    SpatieTagsInput::make('tags')
                        ->columnSpanFull()
                        ->type('projects'),

                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->autosize()
                        ->cols(80)
                        ->rows(4)
                        ->columnSpanFull()
                        ->maxLength(191),

                    Forms\Components\MarkdownEditor::make('content')
                        ->columnSpanFull(),

                    Forms\Components\DateTimePicker::make('project_date'),

                    Forms\Components\TextInput::make('location')
                        ->maxLength(191),

                    Forms\Components\TextInput::make('customer')
                        ->maxLength(191),

                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    Tables\Columns\TextColumn::make('title')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('slug')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('description')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('content')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('project_date')
                        ->dateTime()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('location')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('customer')
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
                'index' => Pages\ListProjects::route('/'),
                'create' => Pages\CreateProject::route('/create'),
                'edit' => Pages\EditProject::route('/{record}/edit'),
            ];
        }
    }
