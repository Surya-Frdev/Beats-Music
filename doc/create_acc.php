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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
    <style>
        .beats-music {
            width: 100%;
            margin: 0 auto;
        }
        .beats-music .beats-container .beats-img, .beats-music .beats-container .beats-content{
            border-radius: 0;
        }
        .beats-content h2{
            font-size: 35px;
        }
        .input-details:nth-child(2), .input-details:nth-child(3) {
            margin-bottom: 40px;
        }
        button{
            margin: 70px 0 34px;
        }

        @media screen and (min-width: 1400px){
            .beats-music {
                width: 75em;
                margin: 8vh auto;
            }
            .beats-music .beats-container .beats-img, .beats-music .beats-container .beats-content{
                border-radius: 6px;
            }
        }

        @media screen and (max-width: 991px){
            .beats-music {
                margin-top: 0;
            }
            button{
                margin: 30px 0;
            }
        }

        @media screen and (max-width: 768px){
            
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
                <h2>Create an account</h2>
                <p>Already have an account ? <a href="../index.php">Sign in</a></p>
                <div class="inputs-container">
                    <div class="entry-data">
                        <div class="input-details">
                            <label>Name</label>
                            <input type="text" name="name" id="name" placeholder="Robin hood">
                            <span class="error-message" id="name-error"></span>
                        </div>
                        <div class="input-details">
                            <label>E - mail</label>
                            <input type="email" name="email" id="email" placeholder="robinhood@gmail.com">
                            <span class="error-message" id="email-error"></span>
                        </div>
                        <div class="input-details">
                            <label>New Password</label>
                            <input type="password" name="password" id="password" placeholder="">
                            <span class="error-message" id="password-error"></span>
                        </div>
                        <div class="input-details">
                            <label>Confirm password</label>
                            <input type="password" name="reset_password" id="reset_password" placeholder="">
                            <span class="error-message" id="reset-password"></span>
                        </div>
                    </div>
                    <button type="submit" id="submit_btn">Sign in</button>
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
    <script src="../js/script.js"></script>
</body>
</html>
