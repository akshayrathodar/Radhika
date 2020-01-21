 <?php

$conn = new mysqli("localhost","root","", "Radhika");
extract($_POST);
$billno = $bno;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM bill WHERE billno=".$billno;

if ($conn->query($sql) === TRUE) {
    header("location:radhikamain.html");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 