<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry; // Tambahkan ini
use Filament\Schemas\Schema;

class BeritaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('judul'),
                TextEntry::make('slug'),
                TextEntry::make('isi')
                    ->columnSpanFull(),
                
                // Ubah dari TextEntry menjadi ImageEntry
                ImageEntry::make('gambar')
                    ->placeholder('-')
                    ->width('150') // Atur lebar tampilan gambar
                    ->height('auto'), // Atur tinggi tampilan gambar
                
                TextEntry::make('penulis')
                    ->placeholder('-'),
                TextEntry::make('tanggal')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}