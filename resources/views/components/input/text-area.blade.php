@props([
    'id',
    'label',
    'name',
    'value' => null,
    'rows' => 5,
    'cols' => 50,
    'attributes' => null
])

<div>
    <label for = "{{$id}}">{{$label}}</label>
    <br>
    <textarea id = "{{$id}}" name = "{{$name}}" rows="{{$rows}}" cols="{{$cols}}" {{$attributes}}>{{$value}}</textarea>
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
