<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div class="relative" x-data="{
            content: '',
            min: $el.dataset.min,
            max: $el.dataset.max,
            get current() {
                return this.content.length
            },
            get remaining() {
                return this.max - this.content.length
            },
            get under() {
                return this.min - this.content.length
            },
            get color() {
                if(this.current == 0) {
                    return 'text-gray-400'
                }
                else if(this.current < this.min || this.current > this.max) {
                    return 'text-danger-400'
                }
                else if (this.min == null && this.max == null) {
                    return 'text-gray-400'
                }
                else {
                    return 'text-green-400'
                }
            }
         }"
        {!! ($min = $getMinCharactersValue()) ? "data-min=\"{$min}\"" : null !!}
        {!! ($max = $getMaxCharactersValue()) ? "data-max=\"{$max}\"" : null !!}
    >
    <textarea
        x-model="content"
        {!! ($autocapitalize = $getAutocapitalize()) ? "autocapitalize=\"{$autocapitalize}\"" : null !!}
        {!! ($autocomplete = $getAutocomplete()) ? "autocomplete=\"{$autocomplete}\"" : null !!}
        {!! $isAutofocused() ? 'autofocus' : null !!}
        {!! ($cols = $getCols()) ? "cols=\"{$cols}\"" : null !!}
        {!! $isDisabled() ? 'disabled' : null !!}
        id="{{ $getId() }}"
        {!! filled($length = $getMaxLength()) ? "maxlength=\"{$length}\"" : null !!}
        {!! filled($length = $getMinLength()) ? "minlength=\"{$length}\"" : null !!}
        {!! ($placeholder = $getPlaceholder()) ? "placeholder=\"{$placeholder}\"" : null !!}
        {!! $isRequired() ? 'required' : null !!}
        {!! ($rows = $getRows()) ? "rows=\"{$rows}\"" : null !!}
        {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
        {{
            $attributes
                ->merge($getExtraAttributes())
                ->merge($getExtraInputAttributeBag()->getAttributes())
                ->class([
                    'block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-600 filament-forms-textarea-component',
                    'dark:bg-gray-700 dark:border-gray-600 dark:text-white' => config('forms.dark_mode'),
                    'border-gray-300' => ! $errors->has($getStatePath()),
                    'border-danger-600 ring-danger-600' => $errors->has($getStatePath()),
                ])
        }}
        @if ($shouldAutosize())
            x-data="textareaFormComponent()"
            x-on:input="render()"
            style="height: 150px"
            {{ $getExtraAlpineAttributeBag() }}
        @endif
    ></textarea>
        <div class="absolute top-0 right-0 pr-2 pt-1 flex items-center pointer-events-none text-gray-400 text-sm" :class="color">
            <span x-text="current"></span> {{ $getMaxCharactersValue() ? '/'.$getMaxCharactersValue() : null }}
        </div>
    </div>
</x-forms::field-wrapper>
