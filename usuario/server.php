<?php
session_start();

// initializing variables
$correo = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'id7857619_root', '254088Ma!', 'id7857619_mandra');
//Ver la conexión de la database.
//if ($db->connect_error) {
//   die("Connection failed: " . $db->connect_error);
//}
//  echo "Connected successfully";
// REGISTER USER
if (isset($_POST['reg_user_register'])) {
  // receive all input values from the form
  $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($correo)) { array_push($errors, "Email requerido para la operación"); }
  if (empty($password_1)) { array_push($errors, "Password requerido para la operación"); }
  if ($password_1 != $password_2) {
	array_push($errors, "No coincide el password");
  }

  // first check the database to make sure 
  // a user does not already exist with the same correo and/or correo
  $user_check_query = "SELECT * FROM user_register WHERE correo='$correo' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 if ($user){
    if ($user['correo'] === $correo) {
      array_push($errors, "Email existente");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO user_register (correo, password)
  			  VALUES('$correo', '$password')";
  	mysqli_query($db, $query);
    $user_check_query = "SELECT * FROM user_register WHERE correo='$correo' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 if ($user){
    if ($user['correo'] === $correo) {
      $id = $user['id_usuario'];
      $query = "INSERT INTO usuario (user_register_id_usuario) VALUES ('$id')";
      mysqli_query($db, $query);
    }
  }
    $_SESSION['correo'] = $correo;
  	$_SESSION['success'] = "Ahora estás en el sistema";
        	header('location: ../index.php');
  }
}
if (isset($_POST['login_user_register'])) {
  $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($correo)) {
  	array_push($errors, "Email requerido para la operación");
  }
  if (empty($password)) {
  	array_push($errors, "Password requerido para la operación");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user_register WHERE correo='$correo' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['correo'] = $correo;
  	  $_SESSION['success'] = "Ahora estás en el sistema";
  	  header('location: ../index.php');
  	}else {
  		array_push($errors, "Email/password incorrectos");
  	}
  }
}
?>
