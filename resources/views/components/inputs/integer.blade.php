<div class="mb-3">
    <label for="{{ $id ?? '' }}" class="form-label">{{ $label }}</label>
    <input
        type="number"
        step="{{ $step ?? '1' }}"
        name="{{ $name }}"
        value="{{ $value ?? old($name) }}"
        id="{{ $id ?? '' }}"
        class="form-control"
    >

    @if($errors->has($name))
    <div class="alert alert-danger">{{ $errors->first($name) }}</div>
    @endif
</div>
