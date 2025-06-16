<?php
if(isset($_POST["name"]) && $_POST["age"] && $_POST["city"]){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $city = $_POST["city"];

    $con = new mysqli("localhost","root","","cracking");
    if($con->connect_error) {
        die("Error". $con->connect_error);
    }
    $query = "insert into cracks(name,age,city) values(?,?,?);";
        
    $res = $con->prepare($query);
    $res->bind_param("sss", $name, $age, $city);
    $res->execute();

    $url = (isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on' ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header("Refresh: 1; URL=$url/loding.php");



}else{
    echo "Data is not set";
}
?>
