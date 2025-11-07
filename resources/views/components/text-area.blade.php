@props(['name', 'placeholder'])

<div>
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes }}></textarea>

    <div>
        @error($name) <span class="text-red-600 text-md">{{ $message }}</span> @enderror
    </div>
</div>
