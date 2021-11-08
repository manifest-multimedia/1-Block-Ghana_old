@props(['name'])

<div class="input-group">
    <input id="{{$name}}" class="form-control" {{ $attributes->merge(['placeholder'=> '', 'type'=>'text','value'=>old($name)]) }} name="{{$name}}" required>
    <span class="input-group-addon">
        {{-- <i class="zmdi zmdi-email"></i> --}}
    </span>
</div>
