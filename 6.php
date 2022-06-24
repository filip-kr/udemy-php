<form action="6.php" method="post">
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password"><br />
    <input type="submit" value="Submit" name="submit">
</form>

<?php

// Step1: Make a form that submits one value to POST super global
if (isset($_POST['submit'])) {
    echo 'POST is posted!';
}

?>