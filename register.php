
<!DOCTYPE html>
<html>
<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
  // Get form data
  $firstName = $_POST['fname'];
  $lastName = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password
  $password = md5($password);

  // Check if email already exists
  $checkEmail = "SELECT * From users where email='$email'";
  $result = $conn->query($checkEmail);
  if ($result->num_rows > 0) {
    echo "Email Address Already Exists!";
  } else {
    // Insert new user into database
    $insertQuery = "INSERT INTO users(firstName,lastName,email,password)
                   VALUES ('$firstName','$lastName','$email','$password')";
    if ($conn->query($insertQuery) === TRUE) {
      header("location: userLog.php");
    } else {
      echo "Error:" . $conn->error;
    }
  }
}

// Similar logic for sign in functionality...


if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: indexAfter.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>
</html>