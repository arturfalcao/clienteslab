<?php

// establishing the MySQLi connection

 session_start();

$con = mysqli_connect("localhost","root","","inlab4");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['login'])){

$user = mysqli_real_escape_string($con,$_POST['username']);

$pass = mysqli_real_escape_string($con,$_POST['password']);

$sel_user = "select * from t_clientes where ft_nomeutilizador='$user' AND ft_password='$pass' and fb_userativo = 1";
$run_user = mysqli_query($con, $sel_user);

$row = $run_user->fetch_array(MYSQLI_BOTH);


$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['user_email']=$user;
$_SESSION['id'] = $row['fn_id'];
echo "<script>window.open('table.php','_self')</script>";

}

else {

echo "<script>alert('Credenciais incorretas por favor tente outra vez')</script>";
echo "<script>window.open('index.php','_self')</script>";

}

}

?>