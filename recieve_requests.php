<?php

$user_email = $_SESSION['user_email'];


$conn = mysqli_connect("localhost", "root", "", "website");
if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
}
echo'<br>';
echo '**********FRIEND REQUESTS************<br>';
$sql = "select f_requests.email, user.fname, user.lname  from f_requests join user on f_requests.email = user.email where f_requests.f_request_email='$user_email'";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);
echo 'There are ' . $queryResult . ' Friend Requets' . '<br>';

if ($queryResult > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo"<div>
                <h3>" . $row['fname'] . " " . $row['lname'] . "</h3>
                
                </div>";
        echo '
          <a href="make_friend.php?make_friend=' . $row['email'] . ' ">' . $row['email'] . '</a>';
        echo'<br>';
    }
} else {
    echo 'No Friend Requests';
}
mysqli_close($conn);
?>