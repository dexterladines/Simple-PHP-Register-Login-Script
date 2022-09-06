<?php
require_once 'includes/header.php';    
?>

<div>
    <h1>Register</h1>

    <form action="includes/register-inc.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email Address">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        <button type="submit" name="submit">Register</button>
    </form>

    <p>Already Have an Account? <a href="login.php">Login Here</a></p>

 </div>

<?php
require_once 'includes/footer.php';    
?>