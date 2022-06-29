@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-green-400 mt-2']) }}>
    {{ $value ?? $slot }}
</label>
