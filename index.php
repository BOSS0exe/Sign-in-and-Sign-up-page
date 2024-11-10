<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- linking with style.css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- linking with boxicon.com -->
    <link rel="icon" href="#"> <!-- your logo optional -->
    <title>sign-up__sign-in</title>

</head>

<body>
                 <!-- Sign up -->
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-github'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-linkedin'></i></a>
                </div>
                <span>Register with E-mail</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Enter E-mail">
                <input type="password" placeholder="Enter Password">
                <button>Sign Up</button>
            </form>
        </div>

                 <!-- Sign in -->
        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-github'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-linkedin'></i></a>
                </div>
                <span>Sign in With Email & Password</span>
                <input type="email" placeholder="Enter E-mail">
                <input type="password" placeholder="Enter Password">
                <a href="#">Forget Password?</a>
                <button>Sign In</button>
            </form>
        </div>

                <!--Redirect to Sign in Page-->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome To <br> Hyper-S</h1>
                    <p>Sign in With Email & Password</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <!--Redirect to Sign up Page-->
                <div class="toggle-panel toggle-right">
                    <h1>Hello World</h1>
                    <p>Sign up now and enjoy our site</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- linking with script.js -->
<script src="script.js"></script>

</body>
</html>