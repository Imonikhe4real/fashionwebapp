<?php

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

}


?>