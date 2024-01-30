
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Form with Validation</title>
    <style>
    .error {
    color: red;
}

body {
    font-family: Arial, sans-serif;
    background-color: skyblue;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #333;
}

#myForm {
    text-align: center;
    box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.1);
    width: 50%;
    padding: 20px;
    margin: 5% auto;
    border-radius: 10px;
    background-color: #fff;
}

label {
    display: inline-block;
    width: 30%;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}

input {
    display: inline-block;
    width: 65%; /* Adjust this value as needed */
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.error {
    color: red;
    font-size: 14px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}


    </style>
</head>
<body>

<h2>Submit Form</h2>

<form id="myForm" enctype="multipart/form-data">
    <div id="message"></div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required minlength="5" maxlength="10">
    <br><br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required minlength="5" maxlength="50">
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="mobile">Mobile No:</label>
    <input type="text" id="mobile" name="mobile" required pattern="[0-9]{10}">
    <br><br>
    <label for="image">Profile Image:</label>
    <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<script>
    $(document).ready(function(){
        $('#myForm').submit(function(e){
            e.preventDefault(); // Prevent default form submission

            // Create FormData object to send form data
            var formData = new FormData(this);

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: 'process_form.php', // PHP file for server-side processing
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    // Handle success response
                    $('#message').html('<div style="color: green;">' + response + '</div>');
                    // Clear form fields
                    $('#myForm')[0].reset();
                },
                error: function(xhr, status, error){
                    // Handle error response
                    $('#message').html('<div style="color: red;">' + xhr.responseText + '</div>');
                }
            });
        });
    });
</script>

    <script>
        document.getElementById('myform').addEventListener('submit', function(event) {
            validateForm(event);
        });

        function validateForm(event) {
            var name = document.getElementById('name').value;
            var address = document.getElementById('address').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var image = document.getElementById('image').files[0];

            if (name.length < 5 || name.length > 10) {
                showError('nameError', 'Name must be between 5 and 10 characters');
                event.preventDefault();
            } else {
                hideError('nameError');
            }

            if (address.length < 5 || address.length > 50) {
                showError('addressError', 'Address must be between 5 and 50 characters');
                event.preventDefault();
            } else {
                hideError('addressError');
            }

            if (!isValidEmail(email)) {
                showError('emailError', 'Invalid email address');
                event.preventDefault();
            } else {
                hideError('emailError');
            }

            if (!/^[0-9]{10}$/.test(mobile)) {
                showError('mobileError', 'Invalid mobile number');
                event.preventDefault();
            } else {
                hideError('mobileError');
            }

            if (!isValidImage(image)) {
                showError('imageError', 'Invalid image type or size');
                event.preventDefault();
            } else {
                hideError('imageError');
            }
        }

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidImage(image) {
            var allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            var maxSize = 2 * 1024 * 1024; // 2 MB

            return image && allowedTypes.includes(image.type) && image.size <= maxSize;
        }

        function showError(id, message) {
            document.getElementById(id).textContent = message;
        }

        function hideError(id) {
            document.getElementById(id).textContent = '';
        }

    </script>

</body>
</html>
