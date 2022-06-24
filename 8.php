<!-- Create a link saying Click Here, and set 
the link href to pass some parameters and use the GET super global to see it -->
<a href="8.php?p1=Parameter 1">Click here</a>
<?php echo $_GET['p1'], '<br />'; ?>

<?php
// Step 2 - Set a cookie that expires in one week
$name = 'Domaćica';
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);

setcookie(
    $name,
    $value,
    $expiration
);

// Step 3 - Start a session and set it to value, any value you want.
session_start();

$_SESSION['greeting'] = 'Hello world';

echo $_SESSION['greeting'];
?>