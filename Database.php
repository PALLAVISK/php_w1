<?php


class Baseclass {
   public $conn;
    function __construct()
    {
        // Create connection
        $this->conn = new mysqli("localhost","root","root","pallavi");

        // Check connection
        if ($this->conn->connect_error) 
        {
         die("Connection failed: " . $this->conn->connect_error);
        }
        else
        {
         echo "Connected successfully<br/>";
        }
 
    }
    public function check($email,$pass){
        $sql = "SELECT * FROM logger
        WHERE email='$email' and password1='$pass'";
        $result =($this->conn->query($sql));

        if ($result->num_rows > 0) {
            echo "You are already registered<br/>";
            
            return true;
            // header("location:welcome.php");

        }
        else{
            // echo"Register first...<br/>";
            return false;
        }     
    }
    public function Added($name,$email,$pass)
    {
        echo $name.$email.$pass;
        $sql = "INSERT INTO logger (fname, email,password1) VALUES ('$name','$email','$pass')";
        //print_r($conn);
        if ($this->conn->query($sql) === TRUE) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
      
}    
    

?>