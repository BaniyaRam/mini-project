<?php
include '../../db.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body><table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phonenumber</th>
      <!-- <th scope="col">operation</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
        
  <?php
  $sql= "Select * from users";
 $result = mysqli_query($conn,$sql);
 if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $phonenumber = $row['phone_number'];
        echo '
        <tr>
          <td>'.$id.'</td>
          <td>'.$username.'</td>
          <td>'.$email.'</td>
          <td>'.$password.'</td>
          <td>'.$phonenumber.'</td>
          </tr>';
          
          
     

    }
 }
 ?>
    </tr>
      </tbody>
    </table>
 
    
    
</body>
</html>
