
<x-banner msg="this is successfull msg by test" class="success" />
<br>
<x-banner msg="this is error msg by test" class="error" />
<a href="/welcome">welcome</a>
<a href="/userForm">userForm</a>

@if(isset($name))
    <h2>Hello, {{ $name }}!</h2>
@else
    <h2>Hello, Guest!</h2>  
@endif

@for($i = 0; $i <= 5; $i++)
    @if($i % 2 == 0)
        <p>{{ $i }} is even.</p>
    @else
        <p>{{ $i }} is odd.</p>
    @endif
@endfor

@if(isset($user))
    @foreach($user as $users)
        <p>{{ $users }}</p>
    @endforeach
@else
    <p>No users available.</p>
@endif

<p>{{ rand() }}</p>