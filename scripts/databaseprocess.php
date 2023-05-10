
<?php
if (emailAlreadyExists($db, $_POST['email']))
{
    echo "<h3>Sorry, but your e-mail
          address is already registered.</h3>";
}
else
{
    $query = "INSERT INTO feedback(
        email,
        message,
        rating
    )
    VALUES (
	'$_POST[email]',
        '$_POST[message]',
        '$_POST[rating]'
    );";
    $success = mysqli_query($db, $query);
    echo "<h3>Thank you for your feedback.</h3>";
}
mysqli_close($db);

function emailAlreadyExists($db, $email)
{
    $query =
      "SELECT *
      FROM feedback 
      WHERE email = '$email'";
    $customers = mysqli_query($db, $query);
    $numRecords = mysqli_num_rows($customers);
    return ($numRecords > 0) ? true : false;
}
?>
