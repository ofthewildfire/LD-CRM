{{--I am pretty certain if memory serves me correctly that this is how you add a prop.--}}
@props(['name' => ''])

<div>
{{--    This name from props becomes a varibale name? i am pretty sure--}}
    @error('name')
        {{ $message }}
    @enderror
</div>
