<?php

namespace App\Filament\Resources\Prestasis\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PrestasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul Prestasi')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('penyelenggara')
                    ->label('Penyelenggara Acara')
                    ->required()
                    ->maxLength(255),
                    
                DatePicker::make('tanggal_diraih')
                    ->label('Tanggal Diraih')
                    ->required()
                    ->default(now()),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Prestasi / Tingkat')
                    ->required()
                    ->maxLength(500)
                    ->rows(3)
                    ->columnSpanFull(),
                
                // FIELD UPLOAD GAMBAR DENGAN IMAGE EDITOR POTRET 3:4
                FileUpload::make('gambar') // Field ini harus sesuai dengan Blade Anda
                    ->label('Foto / Sertifikat Prestasi')
                    ->image()
                    ->disk('public')
                    ->directory('prestasi_images')
                    ->imageEditor()
                    
                    // Rasio Potret (3:4) untuk h-[400px]
                    ->imageEditorAspectRatios([
                        '3:4', // Rasio Potrait (Tinggi lebih besar dari Lebar)
                        '1:1', // Opsi Kotak
                    ])
                    ->imageCropAspectRatio('3:4') 
                    
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }
}
