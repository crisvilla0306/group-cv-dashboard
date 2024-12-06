<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/bag.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/signin.css">

    <title>Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .wrapper {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #loginForm {
            background: #fff;
            padding: 1rem 2rem;
            border-radius: .5rem;
            box-shadow: .0625rem .0625rem .25rem rgba(0, 0, 0, .5);
        }

        .error{
            color: #ff0000;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-center mb-4">Login</h2>

            <!-- Display the error message if it exists -->
            @error('error')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="Enter your username">
                @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Log In</button>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </div>
</body>
