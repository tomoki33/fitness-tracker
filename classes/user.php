<?php
    include 'database.php';
    

    class User extends Database{
    

    public function createUser($firstName,$lastName,$username,$passw){
        //$passw=password_hash($passw,PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (first_name,last_name,username,`password`) VALUES('$firstName', '$lastName', '$username','$passw')";

        // EXecution
        if($this->conn->query($sql)){
            //echo"working";
            header("location:login.php");
            exit;
        }else{
            die("Error adding new user:" .$this->conn->error);
        }

    }

    public function login($username,$passw){
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$passw'";
        $result = $this->conn->query($sql);
        
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['login_id'] = $row['id'];
            // if($row['status'] == 'admin'){
                    // header('location:admin.php');
            // }else{
                // header(index.php);
            // }
            header('location:mainMenu.php');
        }else{
            echo "INCORRECT USERNAME AND PASSWORD";
        }
    }

    public function displayUser(){
        $sql ="SELECT * FROM user";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
                $row =array();
                while($rows =$result->fetch_assoc()){
                    $row[]=$rows;

                }
                return $row;
        }else{
            echo "NO DATA IN DATABASE." .$this->conn->error;
        }
    }

     public function getLoggedInUser($sessionID){
        $sql = "SELECT * FROM user WHERE id = '$sessionID'";
        $result = $this->conn->query($sql);

        if($result == FALSE){
            echo "no data generated";
        }else{
            return $result->fetch_assoc();
        }
    }
    public function addPost($content,$userID){
        $sql = "INSERT INTO snsposts(user_id,post_content)VALUES('$userID','$content')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:snshomepage.php');
        }else{
            echo "error in posting!";
        }
    }

    public function getAllPost(){
        $sql = "SELECT * FROM snsposts ORDER BY post_id DESC";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                echo "<br>";
                echo "<br>";
                $name = $this->getLoggedInUser($row['user_id']);
                echo $name['first_name'];
                echo "<br>";
                echo "<br>";
                echo $row['post_content'];
                echo "<br>";
                echo "<br>";
            }
        }else{
            echo "no post added yet";
        }
    }
        
        
        
        
        
        
}
?>