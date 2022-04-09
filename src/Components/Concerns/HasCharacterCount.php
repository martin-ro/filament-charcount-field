<?php

namespace MartinRo\FilamentCharcountField\Components\Concerns;

trait HasCharacterCount
{
    protected int|null $minCharacters = null;

    protected int|null $maxCharacters = null;

    public function minCharacters($value): static
    {
        $this->minCharacters = $value;

        return $this;
    }

    public function maxCharacters($value): static
    {
        $this->maxCharacters = $value;

        return $this;
    }

    public function getMinCharactersValue()
    {
        return $this->evaluate($this->minCharacters);
    }

    public function getMaxCharactersValue()
    {
        return $this->evaluate($this->maxCharacters);
    }
}
