@props([
    'id',
    'name',
    'label',
    'options' => []
])

<div>
    <label for="{{$id}}">
        {{$label}}
    </label>
    <br>
    <select id="{{$id}}" name="{{$name}}" {{$attributes}}>
        @foreach($options as $value => $text)
            <option value="{{$value}}">
                {{$text}}
            </option>
        @endforeach
    </select>
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
