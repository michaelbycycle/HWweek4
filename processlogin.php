<html>
<body>
<?php echo $_GET["username"];
echo "<br>";
echo $_GET["pwd"];
echo "<br>";
?>

<?php
// Start the session
session_start();
?>


<?php
// Echo session variables that were set on previous page
echo "The organization name is " . $_SESSION["organizationName"] . ".<br>";
echo "The organization is out of the state of " . $_SESSION["state"] . ".";
?>


</body>
</html>