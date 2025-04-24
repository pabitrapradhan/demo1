<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
}

/***********FETCH QUERY************************

$sql = "SELECT * FROM employe";
$stmt = $conn->query($sql);
//$row = $stmt->fetch();
//echo $row['employ_name'];
while($row = $stmt->fetch())
{
	echo $row['employ_name'];
}

***************WHERE QUERY *************************************
$id=2;
$sql = "SELECT * FROM employe where id='$id'";
$stmt = $conn->query($sql);
//$row = $stmt->fetch();
//echo $row['employ_name'];
while($row = $stmt->fetch())
{
	echo $row['employ_name'];
}
******************NUM ROWS QUERY*******************

$id=2;
//$sql = "SELECT * FROM employe";
$mobile_number="7001913136";
$email_id="006nilu@gmail.com";
$sql = "SELECT * FROM employe where employe_mobile='$mobile_number' and employe_email='$email_id'";

$stmt = $conn->query($sql);
$rowCount = $stmt->rowCount();

//echo "Total rows: " . $rowCount;
if($rowCount>0)
{
	echo "mobile number already exit";
}else {
	echo "new user";
}
******************LIMIT QUERY FETCHALL USE*******************

$id=2;
$mobile_numer="7001913136";
$sql = "SELECT * FROM employe where employe_mobile='$mobile_numer' limit 1";
$stmt = $conn->query($sql);
//$row = $stmt->fetchAll();
//echo $row['employ_name'];
while($row = $stmt->fetch())
{
	echo $row['employ_name'];
}

******************INSERT AND LAST INSERT ID QUERY *******************

$name = "John Doe";
$email = "john@example.com";
$mobile="1234567893";

$sql = "INSERT INTO employe (employ_name, employe_mobile, employe_email) VALUES (:employ_name, :employe_mobile, :employe_email)";
$stmt = $conn->prepare($sql);

// Bind and execute
$stmt->execute([
    'employ_name' => $name,
    'employe_mobile' => $mobile,
    'employe_email' => $email,
]);

$lastId = $conn->lastInsertId();
echo "Inserted user ID is: " . $lastId;
echo "New user inserted successfully!";

******************LIMIT QUERY FETCHALL USE*******************/
?>
