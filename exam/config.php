

<?php

class Config
{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="all";
    private $connection;

    public function connect()
    {
       $this->connection=mysqli_connect($this->host,$this->username,$this->password,$this->database);
      

    }

    public function __construct()
    {
        $this->connect();
    }

    public function insert($name,$email,$phone)
    {
        $query="INSERT INTO user(name,email,phone) VALUES('$name','$email',$phone)";
       $res= mysqli_query($this->connection,$query);

      return $res;  
    }
   
    public function fetch()
    {

        $query= "SELECT * FROM user";
        $res=mysqli_query($this->connection,$query);
         return $res;
    }

    public function insertPro($product_name,$price)
    {
        $query="INSERT INTO products(product_name,price) VALUES('$product_name',$price)";
       $res= mysqli_query($this->connection,$query);

      return $res;  
    }
    public function newOrderAdd($order_date,$statusa)
    {
      $query = "INSERT INTO new(order_date,statusa) VALUES($order_date,'$statusa')";
      $res = mysqli_query($this->connection,$query);
      return $res;
    }
   

    public function updatePro($id,$product_name,$price)
    {
        $query="UPDATE products SET product_name='$product_name',price=$price WHERE id=$id";
        $res=mysqli_query($this->connection,$query);
        if ($res) {
            echo "Successfully updated!";
        } else {
            echo "Update failed: " . mysqli_error($this->connection);
        }
    
        return $res;
    }

    
    public function delect($id)
    {
       $query="DELETE FROM new WHERE id=$id";
       $res=mysqli_query($this->connection,$query);
       if($res)
       {
           echo "successfully delet!!";
       }
       else{
           echo "unsuccessfully not delet!!";  
       }
       

    }




  
}
?>

