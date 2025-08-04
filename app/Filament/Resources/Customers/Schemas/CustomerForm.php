<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('customer')
                    ->label('Customer Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter customer name'),
            ]);
    }
}
