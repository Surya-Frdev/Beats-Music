<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats Music</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <style>
        .beats-music .beats-container .beats-content .inputs-container .check-remeber .overlay .popup .input-details input{
            margin-bottom: 0;
        }
        .overlay .popup .input-details span{
            margin-bottom: 34px;
        }

        @media screen and (max-width: 991px){
            .beats-music .beats-container .beats-content .inputs-container .check-remeber .overlay .popup .input-details input{
                margin-bottom: 0;
            }
            .overlay .popup .input-details span{
                margin-bottom: 30px;
            }
        }

        @media screen and (max-width: 768px){
            /* .beats-music .beats-container .beats-content .inputs-container .check-remeber .overlay .popup .input-details input{
                margin-bottom: 0;
            }
            .overlay .popup .input-details span{
                margin-bottom: 30px;
            } */
        }
    </style>
</head>

<body>
    <section class="beats-music">
        <div class="beats-container">
            <div class="beats-img">
                <img src="img/banner.svg" alt="banner" class="banner-img">
            </div>
            <div class="beats-content">
                <h2>Sign in</h2>
                <p>New user? <a href="doc/create_acc.php">Create an account</a></p>
                <div class="inputs-container">
                    <div class="entry-data">
                        <div class="input-details">
                            <label>E - mail</label>
                            <input type="email" name="email" id="email" placeholder="">
                            <span class="error-message" id="email-error"></span>
                        </div>
                        <div class="input-details">
                            <label>Password</label>
                            <input type="password" name="password" id="password">
                            <span class="error-message" id="password-error"></span>
                        </div>
                    </div>
                    <div class="check-remeber">
                        <div class="remember-me">
                            <div class="checkbox-wrapper-46">
                                <input type="checkbox" id="cbx-46" class="inp-cbx" />
                                <label for="cbx-46" class="cbx"
                                  ><span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                      <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span><span>Remember me</span>
                                </label>
                            </div>
                        </div>
                        <a href="#popup">Forgot password</a>
                        <div id="popup" class="overlay">
                            <div class="popup">
                                <a class="close" href="#"><i class="fa-solid fa-xmark"></i></a>
                                <h2>Forgot your password?</h2>
                                <p>Please, enter your email address and we’ll send you link to reset your password.</p>
                                <div class="input-details">
                                    <label>E - mail</label>
                                    <input type="email" name="forgot_email" id="forgotEmail" placeholder="" required>
                                    <span class="error-message" id="forgot-email"></span>
                                    <a href="#popup_2"><button type="submit" name="forgot_submit" value="submit">Continue</button></a>
                                </div>
                                <a href="sign_in.php">Go back to the sign in page</a>
                            </div>
                        </div>
                        <div id="popup_2" class="overlay_2">
                            <div class="popup_2">
                                <a class="close" href="#"><i class="fa-solid fa-xmark"></i></a>
                                <h2>We almost finished</h2>
                                <!-- <p>Check your email, smxxxxx@gmail.com We have sent you the necessary instructions to recover your password.</p> -->
                                <a href="doc/reset_password.php">Go to the reset password</a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="submit-btn">Sign in</button>
                </div>
                <p class="text-content">Or</p>
                <h6>Sign up with</h6>
                <div class="social-links">
                    <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyIiOiIiLCJteCI6IjIifQ%3D%3D%22%7D" target="_blank"><img src="img/twitter.png" alt=""></a>
                    <a href="https://in.linkedin.com/" target="_blank"><img src="img/linkedin.png" alt=""></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png" alt=""></a>
                    <a href="https://accounts.google.co.in" target="_blank"><img src="img/google.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <!-- script tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function () {
    // Show forgot password popup
    $("a[href='#popup']").click(function (e) {
        e.preventDefault();
        
        $("#popup").css("visibility", "visible").css("opacity", "1");
    });

    // Close popup when clicking the close button
    $(".popup .close").click(function (e) {
        e.preventDefault();
        $("#popup").css("visibility", "hidden").css("opacity", "0");
    });

    // Show popup_2 when clicking "Continue" after email entry
    $("#popup button").click(function (e) {
        e.preventDefault();
        var errorIcon = "<img src='./img/alert.png' class='error-icon' style='width:16px; height:16px; margin-left:5px;'>";

        var email = $("#forgotEmail").val().trim(); // Get the value of the email input
        
        // Check if the email field is empty
        if (email === "") {
            $("#forgot-email").html(errorIcon + "Please enter your email address."); // Show error message if empty
        } else {
            // Proceed to next popup if email is valid
            $("#popup").css("visibility", "hidden").css("opacity", "0");
            $("#popup_2").css("visibility", "visible").css("opacity", "1");
        }

        $('#forgotEmail').val('');
    });

    // Close popup_2 when clicking the close button
    $(".popup_2 .close").click(function (e) {
        e.preventDefault();
        $("#popup_2").css("visibility", "hidden").css("opacity", "0");
    });
});

    </script>
</body>

</html>
