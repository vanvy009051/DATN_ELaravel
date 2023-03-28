<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{('./public/frontend/electro-master/css/login.css')}}">
</head>

<body>
    <div class="login-card">
        <div class="column">
            <h1>Login</h1>
            <p>After logining in, you can enjoy the privileges.</p>
            <form>
                <div class="form-item">
                    <input type="text" class="form-element" placeholder="Username or Email">
                </div>
                <div class="form-item">
                    <input type="password" class="form-element" placeholder="Password">
                </div>
                <div class="form-checkbox-item">
                    <input type="checkbox" id="rememberMe" checked>
                    <label for="rememberMe">Remember Me</label>
                </div>
                <div class="flex">
                    <button type="button">Sign In</button>
                    <a href="#">Reset your password</a>
                </div>
                <p style="margin-top:3rem; margin-bottom:1.5rem;">Other sign-in methods</p>
                <div class="socials-button">
                    <a href="#" class="facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="github">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </form>
        </div>
        <div class="column">
            <h2>Welcome to Codeminton</h2>
            <p>If you don't have an account, would you like to register right now?</p>
            <a href="#">Sign Up</a>
        </div>
    </div>
</body>

</html>