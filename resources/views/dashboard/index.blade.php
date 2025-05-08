<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Dashboard Page</h1>

    <form action="{{ route('logout') }}" method="POST" id="logout_form">
        @csrf
        <button type="submit" style="background: none; border: none; padding: 0; font: inherit; cursor: pointer;">Logout</button>
    </form>
 
</body>
</html>