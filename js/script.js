$(document).ready(function() {
    $('#submit_btn, #submit-btn').click(function(e) {
        e.preventDefault();
        var isRegistration = $(this).attr('id') === 'submit_btn';
        
        var name = isRegistration ? $('#name').val() : null;
        var email = $('#email').val();
        var password = $('#password').val();
        var resetPassword = isRegistration ? $('#reset_password').val() : null;
        var rememberMe = !isRegistration ? $('#cbx-46').is(':checked') : null;
        var errorIcon = "<img src='../img/alert.png' class='error-icon' style='width:16px; height:16px; margin-left:5px;'>";

        var isValid = true;

        // Validate Name (only for registration)
        if (isRegistration && name === '') {
            $('#name-error').html(errorIcon + ' Name is required');
            isValid = false;
        } else {
            $('#name-error').html('');
        }

        // Validate Email
        if (email === '') {
            $('#email-error').html(errorIcon + ' Email is required');
            isValid = false;
        } else if (!validateEmail(email)) {
            $('#email-error').html(errorIcon + ' Invalid email address');
            isValid = false;
        } else {
            $('#email-error').html('');
        }

        // Validate Password
        if (password === '') {
            $('#password-error').html(errorIcon + ' Password is required');
            isValid = false;
        } else if (password.length < 8) {
            $('#password-error').html(errorIcon + ' Password must be at least 8 characters long');
            isValid = false;
        } else {
            $('#password-error').html('');
        }

        // Validate Reset Password (only for registration)
        if (isRegistration) {
            if (resetPassword === '') {
                $('#reset-password').html(errorIcon + ' Confirm Password is required');
                isValid = false;
            } else if (resetPassword.length < 8) {
                $('#reset-password').html(errorIcon + ' Password must be at least 8 characters long');
                isValid = false;
            } else if (password !== resetPassword) {
                $('#reset-password').html(errorIcon + ' Passwords do not match');
                isValid = false;
            } else {
                $('#reset-password').html('');
            }
        }

        // Validate Checkbox (only for login)
        if (!isRegistration && !rememberMe) {
            alert("Please check the 'Remember Me' box before proceeding.");
            return;
        }

        if (!isValid) {
            return;
        }

        // If all validations pass, submit the form
        console.log('Form submitted successfully');
        if (isRegistration) {
            console.log('Name: ' + name);
        }
        console.log('Email: ' + email);
        console.log('Password: ' + password);
        if (!isRegistration) {
            console.log('Remember Me: ' + rememberMe);
        }

        // Clear input fields
        if (isRegistration) {
            $('#name').val('');
            $('#reset_password').val('');
        }
        $('#email').val('');
        $('#password').val('');
        $('#cbx-46').prop('checked', false);

        // Reload the page
        location.reload();
    });

    function validateEmail(email) {
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
    }
});
