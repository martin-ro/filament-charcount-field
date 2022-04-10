@props([
    'min' => null,
    'max' => null,
])
<div class="flex-1 relative"
     x-data="{
            count: $refs.countInput.value.length,
            min: $el.dataset.min,
            max: $el.dataset.max,
            get remaining() {
                return this.max - count
            },
            get color() {
                if(this.count == 0) {
                    return 'text-gray-500'
                }
                else if(this.count < this.min || this.count > this.max) {
                    return 'text-danger-500'
                }
                else if (this.min == null && this.max == null) {
                    return 'text-gray-500'
                }
                else {
                    return 'text-green-500'
                }
            }
         }"
    {!! $min ? "data-min=\"{$min}\"" : null !!}
    {!! $max ? "data-max=\"{$max}\"" : null !!}
>
    {{ $slot }}
    <div class="absolute top-0.5 right-0.5 flex items-center pointer-events-none text-gray-500 text-xs" :class="color">
        <div class="bg-white/50 px-1 rounded-lg">
            <span x-text="count"></span><span>{{ $max ? '/'.$max : null }}</span>
        </div>
    </div>
</div>
