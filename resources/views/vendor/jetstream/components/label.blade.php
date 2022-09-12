@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black-600']) }}>
    {{ $value ?? $slot }}
</label>
