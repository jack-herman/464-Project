
<?php
if (emailAlreadyExists($db, $_POST['email']))
{
    echo "<h3>Sorry, but your e-mail
          address is already registered.</h3>";
}
else
{
    $query = "INSERT INTO customer(
        email_address,
        customer_first_name, customer_last_name,
        phone_number,
        address, town_city, county, country
    )
    VALUES (
	'$_POST[email]',
        '$_POST[firstName]', '$_POST[lastName]',
        '$_POST[phone]',
        '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[country]'
    );";
    $success = mysqli_query($db, $query);
    echo "<h3>Thank you for registering with our webpage.</h3>";
}
mysqli_close($db);

function emailAlreadyExists($db, $email)
{
    $query =
      "SELECT *
      FROM customer 
      WHERE email_address = '$email'";
    $customers = mysqli_query($db, $query);
    $numRecords = mysqli_num_rows($customers);
    return ($numRecords > 0) ? true : false;
}
?>
