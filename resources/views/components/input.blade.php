<div class="form-group">    
    <label class="font-weight-bold" for="DataDeNascimento">{{ $label }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <input type="{{ $type ?? 'text' }}" {{ $slot }}  name="{{ $name ?? '' }}" value="{{ old($name, $value ?? null) }}" class="form-control @error($name) is-invalid @enderror" {{ $required ? 'required' : '' }} id="{{ $id ?? $name }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>