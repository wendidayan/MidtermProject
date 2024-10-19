<!-- resources/views/role.blade.php -->
@extends('Components.layout2')

@section('title', 'Select Your Role')

@section('content')
    <div class="cover">
        <div class="front">
            <img src="images/img.png" alt="">
            <div class="text">
                <span class="text-1">Every click leads to a <br> new discovery</span>
                <span class="text-2">Let's get connected</span>
            </div>
        </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Select Your Role</div>
                <form action="{{ route('handle-role-selection') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <label for="role" class="role-label">Choose your role:</label>
                            <select id="role" name="role" required>
                                <option value="" disabled selected>Select your role</option>
                                <option value="student">Student</option>
                                <option value="professor">Professor</option>
                                <option value="none">None</option>
                            </select>
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
