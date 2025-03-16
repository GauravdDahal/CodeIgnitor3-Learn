
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form method="post">
        <div class="container">
            <h1>Registration Form</h1>
            <hr>
            <label><b>Fullname</b></label>
            <input type="text" name="name" placeholder="Fullname" size="50" required />

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="age"><b>Age</b></label>
            <input type="number" placeholder="Enter Age" name="age" required>

            <label><b>Gender:</b></label><br>
            <input type="radio" value="Male" name="gender" checked> Male  
            <input type="radio" value="Female" name="gender"> Female  
            <input type="radio" value="Other" name="gender"> Other  
            
            <label><b>Comment:</b></label>
            <textarea name="comment" cols="50" rows="2" placeholder="Current Address" required></textarea>

            <button type="submit" class="registerbtn">Register</button>
        </div>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $comment = htmlspecialchars($_POST["comment"]);

    echo "<h2>Submitted Data:</h2>";
    echo "<p><strong>Full Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Comment:</strong> $comment</p>";
}
?>
