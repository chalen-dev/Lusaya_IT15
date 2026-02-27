@props([
    'label',
    'name',
    'value' => null,
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
        value="{{$value}}"
        {{$attributes}}
    >
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
