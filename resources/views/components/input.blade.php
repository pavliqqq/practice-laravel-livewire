@props(['name', 'type', 'placeholder' => ''])

<div>
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes }}>

    <div>
        @error($name) <span class="text-red-600 text-md">{{ $message }}</span> @enderror
    </div>
</div>
