<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="w3.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
</head>
<body class="w3-light-grey">

  <div class="sidenav">
  <a href="dashboard.php">Dashboard</a>
  <a href="profile.php">Profile</a>
  <a href="order.php">Order</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
<?php
      

      include 'function2.php';
      $connection = new Connection();
      $id = $_REQUEST['id'];
      $user = $connection->edit($id);


      if (isset($_POST['update'])) {
            $data['id'] = $id;
            $data['firstname'] = $_POST['firstname'];
             $data['lastname'] = $_POST['lastname'];
             $data['email'] = $_POST['email'];
             $data['mobile'] = $_POST['mobile'];
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['address'] = $_POST['address'];

            $update = $connection->update($data);
            
            if ($update) {
                  echo "Record Updated Successfully"; 
                  header("location:dashboard.php");                 
            }else{
               echo "Record Failed";
            }

      }

  ?>
  <br>
<center>  
<div class="w3-card" style="height:200px;width:40%;background-color:white;">
<h1>Welcome <font color="blue"><?php echo $user["username"]; ?></font></h1><br>
<p style="font-size:20px;">Email:<u><?php echo $user["email"]; ?></u></p>
 <p><a href="logout.php" class="btn btn-yellow btn-primary" style="font-weight:bolder;">Logout</a></p>
</div>
</center>

 <br><br>

 <center>
<form action="" method="POST">
      <div class="w3-border-0" style="height:420px;width:50%;background-color:white;">
        <h6 align="center" class="w3-black" style="font-weight:bolder;font-size: 20px;">Update Profile</h6>
       <table>
           <tr>
             <td class="w3-text-green">Firstname</td>
             <td><input type="text" name="firstname" required="required" class="w3-input w3-border" value="<?php echo $user['firstname'] ;?>"></td>
           </tr>
           <tr>
             <td class="w3-text-green">Lastname</td>
             <td><input type="text" name="lastname" required="required" class="w3-input w3-border" value="<?php echo $user['lastname'] ;?>"></td>
           </tr>
           <tr>
             <td class="w3-text-green">Email</td>
             <td><input type="email" name="email" required="required" class="w3-input w3-border" value="<?php echo $user['email'] ;?>"></td>
           </tr>
           <tr>
             <td class="w3-text-green">Mobile</td>
             <td><input type="text" name="mobile" required="required" class="w3-input w3-border" value="<?php echo $user['mobile'] ;?>"></td>
           </tr>
           <tr>
             <td class="w3-text-green">Username</td>
             <td><input type="text" name="username" required="required" class="w3-input w3-border" value="<?php echo $user['username'] ;?>"></td>
           </tr>
           <tr>
             <td class="w3-text-green">Password</td>
             <td><input type="password" name="password" required="required" class="w3-input w3-border" value="<?php echo $user['password'] ;?>"></td>
           </tr>
           <tr>
             <td class="w3-text-green">Address</td>
             <td><textarea name="address" cols="20" rows="5" required="required" class="w3-input w3-border"><?php echo $user['address'] ;?></textarea></td>
           </tr>
       </table>
<!--        <br><br><br> -->
          <center>
            <input type="submit" name="update" value="update" class="w3-input w3-border w3-text-white w3-hover-black"style="background-color:green;font-weight:bolder;"> 
            </center> 
       </div>
    </form>
  </center>
</tr>
</table>
</div>
</form>
</center>
</div>