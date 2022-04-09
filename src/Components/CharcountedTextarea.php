<?php

namespace MartinRo\FilamentCharcountField\Components;

use Filament\Forms\Components\Textarea;
use MartinRo\FilamentCharcountField\Components\Concerns\HasCharacterCount;

class CharcountedTextarea extends Textarea
{
    use HasCharacterCount;

    protected string $view = 'filament-charcount-field::components.textarea';
}
