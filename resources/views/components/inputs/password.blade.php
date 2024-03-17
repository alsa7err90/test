<div class="mb-3">
    <label for="{{ $id ?? '' }}" class="form-label">{{ $label }}</label>
    <input
        type="password"
        name="{{ $name }}"
        id="{{ $id ?? '' }}"
        value="{{ $value ?? old($name) }}"
        class="form-control"
        placeholder="{{ $placeholder ?? '' }}"
    >

    @if($errors->has($name))
    <div class="alert alert-danger">{{ $errors->first($name) }}</div>
    @endif
</div>
