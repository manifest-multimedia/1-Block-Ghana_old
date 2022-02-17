@props(['name'])

<div class="input-group">
    <input id="{{$name}}" class="form-control" {{ $attributes->merge(['placeholder'=> '', 'type'=>'text','value'=>old($name)]) }} name="{{$name}}" required>
    <span class="input-group-addon">
        @if ($errors->has($name))
        <span class="text-danger">{{ $errors->first($name) }}</span>
        @endif
    </span>
</div>
