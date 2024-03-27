<!DOCTYPE html>
<link rel="stylesheet" href="login.css">
<div class="login">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1024px-Amazon_logo.svg.png" alt="" onclick="location.replace('index.html')" class="login__logo"/>
    <div class="login__container">
        <h1>Sign in</h1>
        <form method="post" action="login_process.php">
            <h5>Email:</h5>
            <input name="email" placeholder="Email" type="email" required/>

            <h5>Password:</h5>
            <input name="password" placeholder="ShushShush" type="password" required/>

            <button type="submit" class="login__signInBtn">Sign in</button>
            <p>
                By signing in you agree to Amazon's conditions of use and sale. Please see our privacy notice, our cookies notice, and our interest-based ad notice.
            </p>
            <a href="index.html" class="login__registerBtn">Create your Amazon account</a>
        </form>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Add your authentication logic here (e.g., check against a database)

    // For simplicity, let's just redirect to index.html on successful login
    header("Location: index.html");
    exit();
}
?>
