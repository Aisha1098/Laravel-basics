@props(['name'])
<label class="block mb-2 uppercse font-bold text-bold text-xs text-ray-700" 
        for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>