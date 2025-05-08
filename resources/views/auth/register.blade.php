@extends('layout.app')

@section('content')
    @if ($errors->any())
        <section id="errorModalM" >
            <div class="modal-content animate__animated animate__bounceIn">
                <img id="error-icon" src="images/error-icon.png" alt=""><br>
                <p id="errorTitle">Failed</p><br>
                <p id="errorText">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </p><br>
                <button id="errorcloseModal">Continue</button>
            </div>
        </section>
    @endif

    <h2 id="auth_header">Welcome to the Register Page</h2>
    <form action="{{ route('register.form') }}" method="post" id="register_form">
        <div id="my_account">My Account</div>
        @csrf
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname" value="{{ old('fullname') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>     
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button class="authbutton" type="submit">Register</button><br><br>
        <p>Already have an account? <a href="{{ route('login.form') }}">Login</a></p><br>
    </form>
    
@endsection
