<?php

/**
 * front-end: HTML using tag form(with method and field name) to send data(user input) to server
 * back-end: using super global variable $_GET or $_POST to recevice data from user
 * GET: send data through url
 * POST: send data not throungh url (vì lý do bảo mật)
 */

//back-end
//C1:
// if (isset($_GET['user_name'])) {
//     echo "result GET on Server PHP: " . $_GET['user_name'];
// }
// if (isset($_POST['user_name'])) {
//     echo "result POST on Server PHP: " . $_POST['user_name'];
// }

//C2: coalescing ??
$user_name = $_POST['user_name'] ?? ' ';
echo $user_name;

?>

<!-- front-end -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data to PHP Server using GET POST</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="user_name" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>