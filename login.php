<?php
require_once 'includes/header.php';    
?>

<div>
    <h1>Log in</h1>
    
    <form action="includes/login-inc.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email Address">
        <input type="password" name="password" placeholder="Enter Password">
        <button type="submit" name="submit">Login</button>
    </form>
    
    <p>No Account? <a href="register.php">Register Here</a></p>
</div>

<?php
require_once 'includes/footer.php';    
?>