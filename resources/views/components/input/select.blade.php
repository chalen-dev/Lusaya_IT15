@props([
    'id',
    'name',
    'label',
    'value' => 1,
    'options' => []
])

<div>
    <label for="{{$id}}">
        {{$label}}
    </label>
    <br>
    <select id="{{$id}}" name="{{$name}}" {{$attributes}}>
        @foreach($options as $val => $text)
            <option value="{{$value}}" @selected(old($name, $value) == $val || ($value ?? 1) == $val)>
                {{$text}}
            </option>
        @endforeach
    </select>
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
