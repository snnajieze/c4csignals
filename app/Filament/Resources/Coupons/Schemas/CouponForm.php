<?php

namespace App\Filament\Resources\Coupons\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CouponForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                Select::make('discount_type')
                    ->options([
                        'percentage' => 'Percentage',
                        'fixed' => 'Fixed Amount',
                    ])
                    ->required(),
                TextInput::make('discount_value')
                    ->required()
                    ->numeric(),
                Select::make('cycle')
                ->options([
                        'monthly' => 'Monthly',
                        'yearly' => 'Yearly',
                    ])
                ->helperText('Leave empty to apply to all cycles.'),
                DateTimePicker::make('expires_at'),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('usage_limit')
                    ->numeric(),
                TextInput::make('used_count')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
