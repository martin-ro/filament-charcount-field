![filament-charcounted-field](https://github.com/martin-ro/filament-charcount-field/blob/main/art/banner.png)

# Character counted TextInput & Textarea for Filament.

This package provides a TextInput and Textarea component for [Filament Admin and Forms](https://filamentphp.com) with a character count display.

**TextInput**
```php
use MartinRo\FilamentCharcountField\Components\CharcountedTextInput;

CharcountedTextInput::make('title')
    ->minCharacters(5)
    ->maxCharacters(10),
```

**Textarea**
```php
use MartinRo\FilamentCharcountField\Components\CharcountedTextarea;

CharcountedTextarea::make('title')
    ->minCharacters(5)
    ->maxCharacters(10),
```

Here's an example of how the components looks like:
![Example of Filament Charcounted Field components](https://github.com/martin-ro/filament-charcount-field/blob/main/art/example.png)

Demo:
![Demo of Filament Charcounted Field components](https://github.com/martin-ro/filament-charcount-field/blob/main/art/demo.gif)

## Installation

First, install the packages:

```shell
composer require martin-ro/filament-charcount-field
```

Add the components to a Filament resource form:
```php
<?php

namespace App\Filament\Resources;

// ...
use MartinRo\FilamentCharcountField\Components\CharcountedTextInput;
use MartinRo\FilamentCharcountField\Components\CharcountedTextarea;

class PostResource extends Resource
{
    // ...
    public static function form(Form $form): Form
    {
        return $form->schema([
            // ...
            
            // TextInput
            CharcountedTextInput::make('title')
                ->label('Title')
                ->hintIcon('heroicon-o-code')
                ->hint('Title tag in header')
                ->helperText('While Google does not specify a length for title tags, usually the first 50–60 characters are displayed.')
                ->minCharacters(50)
                ->maxCharacters(60),
                           
           // Textarea 
            CharcountedTextarea::make('description')
                ->label('Description')
                ->rows(4)
                ->hintIcon('heroicon-o-code')
                ->hint('Meta description tag in header')
                ->helperText('Meta descriptions can technically be any length, but Google generally truncates snippets to ~155-160 characters.')
                ->minCharacters(155)
                ->maxCharacters(160),
                
            // ..
        ]);
    }
    // ...
}
```

