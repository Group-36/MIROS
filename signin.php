<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .left-side {
            flex: 1;
            background-image: url('MIROSbackground.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }
        .right-side {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .forgot-password {
            margin-left: auto; 
        }
        .submit-btn {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px; 
        }
        .create-account {
            color: blue;
            margin-top: 10px; 
        }

        .form-group {
    margin-bottom: 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
           
        </div>
        <div class="right-side">
            <h1>Sign In</h1>
            <form action="login.php" method="post">
                    <div class="form-group">
        <label for="email">Email:</label>
        <input class="input-field"  type="text" id="email" name="email" required><br><br>
    </div>
    <div class="from-group">
        <label for="password">Password:</label>
        <input class="input-field" type="password" id="password" name="password" required><br><br>
    </div>  
             <div class="remember-me">
                    <input type="checkbox" id="remember_me" name="remember_me">
                    <label for="remember_me">Remember me</label>
                    <a href="#" class="forgot-password">Forgotten password?</a>
                </div>
                <button type="submit" class="submit-btn">Get Started</button><br>
            </form>
        </div>
    </div>
        if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</body>
</html>
