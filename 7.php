<?php
// Step 1 -Make a variable with some text as value
$toBeEncrypted = 'Filip';

// Step 2 - Use crypt() function to encrypt it
// Step 3 - Assign the crypt result to a variable
// crypt() is outdated, password_hash() reigns supreme
$encryptedString = password_hash($toBeEncrypted, PASSWORD_DEFAULT);

// Step 4 - echo the variable 
echo $encryptedString;
