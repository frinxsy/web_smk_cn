<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('isi')
                    ->required()
                    ->columnSpanFull(),
                
                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('berita_images')
                    ->imageEditor()
                    
                    // MEMBATASI DAN MENETAPKAN RASIO CROP UTAMA KE 16:9
                    ->imageEditorAspectRatios([
                        '16:9', // Paling cocok untuk tampilan card dan detail berita
                        '3:2',  // Opsi cadangan
                    ])
                    ->imageCropAspectRatio('16:9') // Mengatur rasio default saat editor dibuka
                    
                    ->nullable(),
                
                TextInput::make('penulis')
                    ->default(null),
                
                DatePicker::make('tanggal')
                    ->default(now()),
            ]);
    }
}
