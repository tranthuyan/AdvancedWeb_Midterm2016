<?php
$user='root';
$pw='';
$host='localhost';
$db='midterm';
$table='contact';

$conn=@ mysqli_connect($host, $user, $pw, $db);
if (mysqli_connect_errno()) {
    die('Could not connect to database!!!');
}

function postT($name, $email)
{
    global $conn;
    $query="INSERT INTO contact (name,email)
            VALUES ('$name','$email')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'> <strong>  Added </strong> </div>";
    } else {
        echo "<div class='alert alert-danger'> <strong> Could not add  </strong> </div>";
    }
}

function getContact()
{
  global $conn;
  $query = "SELECT * FROM contact";
  $result = mysqli_query($conn, $query);
  if (!$result) {
      die("Query to show fields from table failed");
  }

    while ($row = mysqli_fetch_array($result)) {

     echo "<tr><td class = 'btn-edit'></td>" .
              "<td>". $row['name']."</td>".
              "<td>". $row['email']."</td></tr>"
   }
}

function getTitle($x, $y, $z)
{
    return $x.' '.$y.' - '.$z;
}

 ?>
