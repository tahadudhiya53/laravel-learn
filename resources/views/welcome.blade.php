@include('test', [ 'test' => 'this is test page'])
@include('nested.nested', [ 'nested' => 'this is nested page'])
@includeIf('nested.nested', [ 'nested' => 'this is nested page'])
<x-banner msg="this is successfull msg by welcome" class="success" />
<br>
<x-banner msg="this is error msg by welcome" class="error" />

<h1>this is welcome page</h1>

<a href="/test">test</a>
<a href="/userForm">userForm</a>



<style>
    .success {
        color: blue ; 
        font-weight: bold;
    }
    .error{
        color: red; 
        font-weight: bold;
    }
</style>