<?php

// Return if the username = abc, otherwise "Error"
$username = $_POST['username'] ?? '';
echo ($username === 'abc') ? 'Verified' : 'Error';

?>