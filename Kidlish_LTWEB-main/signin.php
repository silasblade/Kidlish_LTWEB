<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/signin/signin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <title>SIGN IN</title>
</head>
<body>
    <div class="signin">
        <h1 class="signin-heading">SIGN IN</h1>
        <button class="signin-social">
          <i class="fa fa-google" aria-hidden="true"></i><span class="signin-social-text">Sign in with Google</span>
          </button>
          <div class="signin-or"><span>Or</span></div>
          <form action="signin2.php" method="post" class="signin-form" autocomplete="off">
            <label for="name" class="signin-label">Sign in by username or phone number</label>
            <input type="text" name="name" id="name" class="signin-input-name" placeholder="">
            <label for="password" class="signin-label">Password</label>
            <input type="password" name="password" id="password" class="signin-input-pass" placeholder="">
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
    margin-bottom: 25px;">Sign in</button>
          </form>
    </div>
</body>
<script src="/signin/signin.js"></script>
</html>
