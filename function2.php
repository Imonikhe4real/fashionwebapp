<?php
session_start();
class Connection{
public $servername='localhost';
public $user ='root';
public $pass ='';
public $dbname ='fashions';


public function __construct(){ 
       $dbconn = 'mysql:host='.$this->servername.';dbname='.$this->dbname;
       $this->conn = new PDO($dbconn,$this->user,$this->pass);
       $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
public function edit($id){
      
      $data = null;

      $sql = "SELECT * FROM users WHERE id = :id";      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':id',$id);
      $stmt->execute();
      
      if ($stmt) {
      	    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      	    	   $data = $row;
      	    }
      }
      return $data;

    }

public function update($data){
       $sql = "UPDATE users SET firstname = :firstname,lastname = :lastname,email = :email,mobile = :mobile,username=:username,password = :password,address = :address WHERE id = :id ";
       $stmt = $this->conn->prepare($sql);
       $stmt->bindParam(':firstname',$data['firstname']);
       $stmt->bindParam(':lastname',$data['lastname']);
       $stmt->bindParam(':email',$data['email']);
       $stmt->bindParam(':mobile',$data['mobile']);
       $stmt->bindParam(':username',$data['username']);
       $stmt->bindParam(':password',$data['password']);
       $stmt->bindParam(':address',$data['address']);
       $stmt->bindParam(':id',$data['id']);
       $stmt->execute();

       if ($stmt) {
       	    return true;
       }else{
       	  return false;
       }


   }
public function fetch(){

        $data = null;

        $sql  = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        if ($stmt) {
               while ($row = $stmt->fetch()) {
                      $data[] = $row;
               }
        }
        return $data;
    }
public function fetch_single($id){
          
         $data = null;

         $sql = "SELECT * FROM users WHERE id = :id";
         $stmt = $this->conn->prepare($sql);
         $stmt->bindParam(':id',$id);
         $stmt->execute();
         if ($stmt) {
             while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                     $data = $row;
             }
         }
         return $data;
   }

public function order(){
	     if (isset($_POST['order'])) {
     	    
     	    $name = $_POST['name'];
     	    $mobile = $_POST['mobile'];
     	    $email = $_POST['email'];
     	    $address = $_POST['address'];
     	    $item    = $_POST['item'];
     	    $color    = $_POST['color'];
     	    $size    = $_POST['size'];
     	    $price    = $_POST['price'];
     	    $description = $_POST['description'];
     	    $order_date = $_POST['order_date'];
  $sql = "INSERT INTO orders(name,mobile,email,address,item,color,size,price,description,order_date)VALUES(:name,:mobile,:email,:address,:item,:color,:size,:price,:description,:order_date)";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':mobile',$mobile);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':address',$address);
    $stmt->bindParam(':item',$item);
    $stmt->bindParam(':color',$color);
    $stmt->bindParam(':size',$size);
    $stmt->bindParam(':price',$price);
    $stmt->bindParam(':description',$description);
    $stmt->bindParam(':order_date',$order_date);
    $stmt->execute();

    echo "<br>";
    echo "<center><b>Order Sent Successfully</b></center>";
    echo "<center><b>You will get a response in 1 hour time from now by email</b></center>";
    echo "<br>";
    echo "<br>";
    echo "<center>";
    echo "<table class='table-striped'>";
    echo "<tr><td>"."<b>Name : </b>".$name."</td></tr>";
    echo "<tr><td>"."<b>Mobile : </b>".$mobile."</td></tr>";
    echo "<tr><td>"."<b>Email : </b>".$email."</td></tr>";
    echo "<tr><td>"."<b>Address : </b>".$address."</td></tr>";
    echo "<tr><td>"."<b>Item : </b>".$item."</td></tr>";
    echo "<tr><td>"."<b>Color : </b>".$color."</td></tr>";
    echo "<tr><td>"."<b>Size : </b>".$size."</td></tr>";
    echo "<tr><td>"."<b>Price : </b>".$price."</td><item/tr>";
    echo "<tr><td>"."<b>Description : </b>".$description."</td></tr>";
    echo "<tr><td>"."<b>Order date : </b>".$order_date."</td></tr>";



    echo "</center>";




	     }

   }
public function contact(){
           if (isset($_POST['send'])) {
            $fullname = $_POST['fullname']; 
            $email = $_POST['email'];   
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $message = $_POST['message'];
    
    $sql = "INSERT INTO contacts(fullname,email,mobile,address,message)VALUES(:fullname,:email,:mobile,:address,:message)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':fullname',$fullname);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':mobile',$mobile);
    $stmt->bindParam(':address',$address);
    $stmt->bindParam(':message',$message);
    $stmt->execute();

    echo "<center><b><font color='black'>Message Sent Successfully</font></b></center>";
    echo "<center><b><font color='black'>You will be contacted shortly by our call center agent in 24hrs time from now.</font></b></center>";

      }
}


}


?>
