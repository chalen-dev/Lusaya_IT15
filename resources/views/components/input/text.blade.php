@props([
    'label',
    'name',
    'class' => null,
    'attributes' => null,
])
<div>
    <label>{{$label}}</label>
    <br>
    <input
        type="text"
        class="{{$class}}"
        name="{{$name}}"
        {{$attributes}}
    >
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
