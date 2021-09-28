<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML> 

<?php $cookie_name = "user";
        $cookie_value = "Healthy Community Living User ";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>





<html>
    <body>
        <form action="processlogin.php" method="GET">
            <table>
                 <tr>
                    <td>username:</td>
                    <td><input type="text" name="username"></td>
                 </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="pwd"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form><br />

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!  ";
  echo "Value is: " . $_COOKIE[$cookie_name];
  echo "<br>";
}
?>

<?php
// Set session variables
$_SESSION["organizationName"] = "Support Montana";
$_SESSION["state"] = "Montana";
echo "Session variables are set for Organization Name and Organization's state.";
?>

    </body>
</html>


