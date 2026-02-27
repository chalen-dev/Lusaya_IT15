@props([
    'id',
    'label',
    'name',
    'rows' => 5,
    'attributes' => null
])

<div>
    <label for = "{{$id}}">{{$label}}</label>
    <br>
    <textarea id = "{{$id}}" name = "{{$name}}" rows="{{$rows}}" {{$attributes}}>
    </textarea>
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
