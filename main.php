
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="portfolio";
$firstname=filter_input(_post,firstname);
$lastname=filter_input(_post,lastname);
$emailaddress=filter_input(input_post,emailaddress);
if(!empty($firstname)){
if(!empty($lastname)){
if(!empty($emailaddress)){

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
$sql = "INSERT INTO clients (firstname, lastname, emailaddress)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

