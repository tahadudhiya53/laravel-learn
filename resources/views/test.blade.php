<h1>This ia test page</h1>

@if(isset($name))
    <h2>Hello, {{ $name }}!</h2>
@else
    <h2>Hello, Guest!</h2>  
@endif