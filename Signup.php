<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="miros.css">
</head>

<body class="body2">
    <div class="white-border" style="text-align: center;">
        <div style="transition: unset; inset: 0px; text-align: left; margin-bottom: -160px;"><img width="367" height="124" src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png"></div>
        <h1 style="color: black; font-weight: bold; text-align: center; font-size: 40px;">Create Account</h1>
        <div style="transition: unset; inset: 0px; text-align: center;"><img width="405" height="246" src="https://img02.mockplus.com/rp/image/2024-03-14/90d76c00-e159-11ee-8f72-115981801776.png" class="headerborder"></div>
        <hr>
        <br>

        <form style="display: flex; justify-content: space-between;">
            <div style="flex: 0 0 calc(50%);">
                <div class="form-group1">
                    <input type="text" class="form-control" name="First_Name" placeholder=" First Name" style="height: 45px; width: 600px; border-radius: 20px;" required>
                </div>
                <br>
                <br>

                <div class="form-group1">
                    <input type="text" class="form-control" name="Last_Name" placeholder=" Last Name" style="height: 45px; width: 600px; border-radius: 20px;" required>
                </div>
                <br>
                <br>

                <div class="form-group1">
                    <input type="date" class="form-control" name="DOB" id="dob-input" style="height: 45px; width: 605px; border-radius: 20px;" required>
                    <label for="dob-input" class="placeholder" style="margin-top: 10px; color: black;">Date Of Birth</label>
                </div>
            </div>

            <div style="flex: 0 0 calc(50%);">
                <div class="form-group1">
                    <input type="email" class="form-control" name="Email" placeholder=" Email" style="height: 45px; width: 600px; border-radius: 20px;" required>
                </div>
                <br>
                <br>

                <div class="form-group1">
                    <input type="password" class="form-control" name="Password" placeholder=" Password" style="height: 45px; width: 600px; border-radius: 20px;" required>
                </div>
                <br>
                <br>

                <div class="form-group1">
                    <input type="password" class="form-control" name="Confirm_Password" placeholder=" Confirm Password" style="height: 45px; width: 600px; border-radius: 20px;" required>
                </div>

                <div class="checkbox" style="margin-left: -900px; margin-top: 75px;">
                    <input type="checkbox" id="terms_and_condition" style="text-align: auto;"> <!--margin-left: -215px;-->
                    <label for="I agree to the terms and conditions" style="font-size: 20px; color:black; text-align: auto;" required>I agree to the terms and conditions</label><br> <!--margin-right: -150px; margin-top: -20px;-->
                    <button id="myButton" class="btn btn-primary" style="background-color: rgb(249, 99, 50);; color: white; border-radius: 20px; width: 130px; height: 50px; text-align: center;" onclick="window.location.href='login.php'">Get Started</button>
                </div>
        </form>
    </div>
</body>