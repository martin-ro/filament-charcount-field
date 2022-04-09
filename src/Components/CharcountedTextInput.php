<?php

namespace MartinRo\FilamentCharcountField\Components;

use Filament\Forms\Components\TextInput;
use MartinRo\FilamentCharcountField\Components\Concerns\HasCharacterCount;

class CharcountedTextInput extends TextInput
{
    use HasCharacterCount;

    protected string $view = 'filament-charcount-field::components.text-input';
}
