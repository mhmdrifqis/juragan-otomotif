<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama')->schema([
                    Forms\Components\Select::make('brand_id')
                        ->relationship('brand', 'name')
                        ->required()
                        ->searchable(),
                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required()
                        ->searchable(),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('price')
                        ->numeric()
                        ->required()
                        ->prefix('Rp'),
                ])->columns(2),

                Forms\Components\Section::make('Spesifikasi Kendaraan')->schema([
                    Forms\Components\TextInput::make('year')
                        ->numeric()
                        ->required(),
                    Forms\Components\Select::make('transmission')
                        ->options([
                            'Manual' => 'Manual',
                            'Automatic' => 'Automatic',
                            'CVT' => 'CVT',
                        ])->required(),
                    Forms\Components\Select::make('fuel_type')
                        ->options([
                            'Bensin' => 'Bensin',
                            'Diesel' => 'Diesel',
                            'Hybrid' => 'Hybrid',
                            'EV' => 'EV',
                        ])->required(),
                    Forms\Components\TextInput::make('engine_capacity')
                        ->numeric()
                        ->suffix('CC'),
                    Forms\Components\TextInput::make('mileage')
                        ->numeric()
                        ->suffix('Km'),
                    Forms\Components\TextInput::make('color')
                        ->maxLength(255),
                ])->columns(3),

                Forms\Components\Section::make('Deskripsi & Status')->schema([
                    Forms\Components\Select::make('status')
                        ->options([
                            'Tersedia' => 'Tersedia',
                            'Dibooking' => 'Dibooking',
                            'Terjual' => 'Terjual',
                        ])
                        ->default('Tersedia')
                        ->required(),
                    Forms\Components\Toggle::make('is_featured')
                        ->label('Mobil Unggulan')
                        ->default(false),
                    Forms\Components\RichEditor::make('description')
                        ->columnSpanFull(),
                ]),

                Forms\Components\Section::make('Galeri Foto')->schema([
                    Forms\Components\Repeater::make('images')
                        ->relationship('images')
                        ->schema([
                            Forms\Components\FileUpload::make('image_path')
                                ->label('Pilih Gambar')
                                ->image()
                                ->directory('cars')
                                ->required(),
                            Forms\Components\Toggle::make('is_primary')
                                ->label('Jadikan Foto Utama')
                                ->default(false),
                        ])
                        ->columns(2)
                        ->defaultItems(1)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Tersedia' => 'success',
                        'Dibooking' => 'warning',
                        'Terjual' => 'danger',
                        default => 'secondary',
                    })
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Unggulan'),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
