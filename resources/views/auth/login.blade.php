@extends('layout.app')

@section('content')
    @if(session('success'))
        <section id="successModal" >
            <div class="modal-content animate__animated animate__bounceIn">
                <img id="success-icon" src="images/success-icon.png" alt=""><br>
                <p id="successTitle">Success</p><br>
                <p id="successText"> {{ session('success') }}</p><br>
                <button id="closeModal">Continue</button>
            </div>
        </section>
    @endif

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

    <h2 id="auth_header">Welcome to the Login Page</h2>
    <form action="" method="POST" id="login_form">
        <div id="my_account">My Account</div>
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button class="authbutton" type="submit">Login</button><br><br>
        <p>Don't have an account? <a href="{{ route('register.form') }}">Sign Up</a></p><br>
        <p>Lost your password?</p>

    </form>
    
@endsection