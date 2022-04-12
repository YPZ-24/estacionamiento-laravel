@props([
    'id' => 'id_input',
    'name' => 'name_input',
    'placeholder' => 'placeholder',
    'type' => 'text',
    'value' => old($name),
    'required' => true,
    'disabled' => false,
    'readonly' => false,
    'error' => $name,
    'pattern' => false,
    'regex' => '',
    'maxLength' => '250' 
])

<div class="form-floating">
    <input 
        id="{{$id}}"
        name="{{$name}}"
        value="{{$value}}"
        class="form-control @error($error) is-invalid @enderror"
        placeholder="{{$placeholder}}"
        type="{{$type}}"
        maxlength="{{$maxLength}}"
        {{$pattern ? 'pattern ='.$regex : ''}}
        {{$required ? 'required' : ''}}
        {{$disabled ? 'disabled': ''}}
        {{$readonly ? 'readonly': ''}}
    >

    <label for="{{$id}}">{{$placeholder}}</label>
    <span class="input-underline"></span>
</div>