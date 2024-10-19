<!-- resources/views/login.blade.php -->
@extends('Components.layout2')

@section('title', 'Enter Your Username')

@section('content')
<div class="cover">
    <div class="front">
        <img src="images/img2.png" alt="">
        <div class="text">
            <span class="text-1">Every click leads to a <br> new discovery</span>
            <span class="text-2">Let's get connected</span>
        </div>
    </div>
</div>
<div class="forms">
    <div class="form-content">
        <div class="login-form">
            <div class="title">Let's Get Started</div>
            <form action="/handle-username" method="POST"> 
                 @csrf 
                <div class="input-boxes">
                    <div class="input-box2">
                        <label for="username" class="role-label">Enter your username:</label>
                        <input type="text" id="username" name="username" placeholder="username" pattern="[a-zA-Z]*" title="Username must contain only alphabetic characters.">
                    </div>
                    <div class="button input-box">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
