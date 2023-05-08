<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/signup/reset.css" />
    <link rel="stylesheet" href="/signup/signup.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>SIGN UP</title>
</head>
<body>
    <div class="signup">
        <h1 class="signup-heading">SIGN UP</h1>
        <button class="signup-social">
          <i class="fa fa-google" aria-hidden="true"></i><span class="signup-social-text">Sign up with Google</span>
          </button>
          <div class="signup-or"><span>Or</span></div>
          <form action="signup2.php" method="post" id="form sign" class="signup-form" autocomplete="off">
            <label for="name" class="signup-label">Username</label>
            <input type="text" id="username" name="username" class="signup-input-name" placeholder="Eg: Kidlish">
            <label for="phone" class="signup-label">Phone number</label>
            <input type="text" id="phone" name="phone" class="signup-input-phone" placeholder="Eg: +84 123456789">
            <label for="password" class="signup-label">Password</label>
            <input type="password" id="pass" name="pass" class="signup-input-pass" placeholder="Eg: Kidlish@123">
            <button type="submit" style="padding: 25px;
    color: black;
    font-size: 30px;
    text-align: center;
    border: 0;
    outline: none;
    display: inline-block;
    width: 100%;
    border-radius: 14px;
    background-color:#f0b3b3;
    box-shadow: 0 5px 10px 0 rgba(196, 54, 54, 0.5);
    font-family: Minnie;
    cursor: pointer;
    font-weight: 600;
    margin-top: 25px;
    margin-bottom: 25px;">Create new account</button>
          </form>
          <p class="signup-already">
            <span>Already have an account ?</span>
            <a href="signin.php" class="signup-login-link">SIGN IN</a>
          </p>
    </div>
</body>
<script src="/signup/signup.js"></script>
</html>