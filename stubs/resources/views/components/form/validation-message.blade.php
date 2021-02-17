@if($errors->first($name))
    <span class="text-red-500 mt-1 text-sm font-medium block" role="alert">
        {{ $errors->first($name) }}
    </span>
@endif