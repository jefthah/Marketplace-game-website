<?php 
$conn = mysqli_connect("localhost","root","","database_web");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function login($data)
{
    global $conn;
    $email = htmlspecialchars($data["email"]);
    $password = $data["password"]   ;
    
    $result = mysqli_query($conn,"SELECT * FROM database_porto1_user where email = '$email'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (strcmp($password,$row["password"])==0) {
            return true;
        }
        else {
            return false;
        }
    }else {
        return false;
    }

}
function insert($data)
{   
    global $conn;
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["name"]);
    $password = mysqli_real_escape_string($conn,htmlspecialchars($data["password"]));



    $result = mysqli_query($conn,"SELECT email FROM  database_porto1_user where email = '$email'");
    
    if (mysqli_fetch_assoc($result)) {
        return false;
    }

    $query = "INSERT INTO  database_porto1_user VALUES('','$email','$nama','','$password','','','')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

?>