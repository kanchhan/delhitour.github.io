
<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','tms');
// Establish database connection.

$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$pid = $_POST['pid'];
// Prepare the delete statement
$stmt = $dbh->prepare("DELETE FROM tbltourpackages WHERE PackageId = ?");
// DELETE FROM tbltourpackages WHERE `tbltourpackages`.`PackageId` = 1"

// Bind the parameter(s)
//$pkg_id = 123;
$stmt->bindParam(1, $pid);

// Execute the statement
$stmt->execute();

echo "Data deleted successfully.";
?>