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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
    <style>
        .beats-music{
            height: 600px;
        }
        .beats-music .beats-container .beats-img img{
            width: 100%;
            height: unset;
            object-fit: unset;
        }
        .overlay {
    display: none; /* Hide the popup initially */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.popup {
    background: white;
    padding: 50px 20px;
    border-radius: 10px;
    text-align: center;
    width: 300px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
    transition: 0.3sease-in-out;
}
.popup .close:hover{
    color: #EF3C56;
    transform: rotate(90deg);
}
.beats-music .beats-container .beats-content h2{
    font-size: 24px;
    font-weight: 500;
    padding-top: 40px;
}
.beats-music .beats-container .beats-content p {
    font-size: 14px;
    font-weight: 400;
    padding-bottom: 20px;
}
.popup a{
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    color: #EF3C56;
}

.beats-music .beats-container .beats-content .reset-pass .entry-data {
    margin-top: 50px;
}

.beats-music .beats-container .beats-content .text-content::before {
    left: 3%;
}
.beats-music .beats-container .beats-content .text-content::after{
    left: 40%;
}

@media screen and (min-width: 1400px){
    .beats-music .beats-container .beats-content .text-content::before, .beats-music .beats-container .beats-content .text-content::after{
        width: 18%;
        left: 20%;
    }
    .beats-music .beats-container .beats-content .text-content::after{
        left: 44%;
    }
}

@media screen and (max-width: 768px){
    .beats-content h2{
        padding-top: 14px !important;
    }
    .beats-music .beats-container .beats-content .reset-pass .entry-data {
        margin-top: 35px;
    }
    .beats-music .beats-container .beats-content .text-content::before, .beats-music .beats-container .beats-content .text-content::after{
        width: 18%;
        left: 20%;
    }
    .beats-music .beats-container .beats-content .text-content::after{
        left: 44%;
    }
}

@media screen and (max-width: 400px){
    .beats-music .beats-container .beats-content .text-content::before, .beats-music .beats-container .beats-content .text-content::after{
        width: 24%;
        left: 8%;
    }
    .beats-music .beats-container .beats-content .text-content::after{
        left: 44%;
    }
}
    </style>
</head>

<body>
    <section class="beats-music">
        <div class="beats-container">
            <div class="beats-img">
                <img src="../img/banner.svg" alt="banner" class="banner-img">
            </div>
            <div class="beats-content">
                <h2>Reset password</h2>
                <div class="inputs-container reset-pass">
                    <div class="entry-data">
                        <div class="input-details">
                            <label>New Password</label>
                            <input type="password" name="password" id="password" placeholder="">
                            <span class="error-message" id="password-error"></span>
                        </div>
                        <div class="input-details">
                            <label>Confirm your new password</label>
                            <input type="password" name="reset_password" id="reset_password" placeholder="">
                            <span class="error-message" id="reset-password"></span>
                        </div>
                    </div>
                        <div id="popup" class="overlay">
                            <div class="popup">
                                <a class="close" href="#"><i class="fa-solid fa-xmark"></i></a>
                                <i class="fa-regular fa-circle-check"></i>
                                <h2>Success</h2>
                                <p>Your password is changed successfully.</p>
                                <a href="../index.php">Go back to the sign in page</a>
                            </div>
                        </div>
                    <button type="submit" id="submit_btn">Change Password</button>
                </div>
                <p class="text-content">Or</p>
                <h6>Sign up with</h6>
                <div class="social-links">
                    <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyIiOiIiLCJteCI6IjIifQ%3D%3D%22%7D" target="_blank"><img src="../img/twitter.png" alt=""></a>
                    <a href="https://in.linkedin.com/" target="_blank"><img src="../img/linkedin.png" alt=""></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="../img/facebook.png" alt=""></a>
                    <a href="https://accounts.google.co.in" target="_blank"><img src="../img/google.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <!-- script tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
    $(document).ready(function() {
        $('#submit_btn').click(function(e) {
            e.preventDefault();
            var password = $('#password').val();
            var resetPassword = $('#reset_password').val();
            var errorIcon = "<img src='../img/alert.png' class='error-icon' style='width:16px; height:16px; margin-left:5px;'>";

            var isValid = true;

            // Validate Password
            if (password == '') {
                $('#password-error').html(errorIcon + ' Password is required');
                isValid = false;
            } else if (password.length < 8) {
                $('#password-error').html(errorIcon + ' Password must be at least 8 characters long');
                isValid = false;
            } else {
                $('#password-error').html('');
            }

            // Validate Reset Password
            if (resetPassword == '') {
                $('#reset-password').html(errorIcon + ' Confirm Password is required');
                isValid = false;
            } else if (resetPassword.length < 8) {
                $('#reset-password').html(errorIcon + ' Password must be at least 8 characters long');
                isValid = false;
            } else if (password !== resetPassword) {
                $('#reset-password').html(errorIcon + ' Passwords does not match');
                isValid = false;
            } else {
                $('#reset-password').html('');
            }

            // Stop execution if any field is invalid
            if (!isValid) {
                return;
            }

            // Show the success popup
            $('#popup').fadeIn();

            // Clear input fields after showing the popup
            $('#password').val('');
            $('#reset_password').val('');
        });

        // Close popup when clicking the "X" button
        $('.close').click(function(e) {
            e.preventDefault();
            $('#popup').fadeOut();
        });
    });
</script>
</body>
</html>
