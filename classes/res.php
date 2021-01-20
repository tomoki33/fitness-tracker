<?php
    include 'database.php';
    

    class Res extends Database{
    
        public function addRes($trainerName,$date,$time){
        
            $sql = "INSERT INTO reservation(trainer_name,date,time) VALUES('$trainerName', '$date', '$time')";
            
               
            if($this->conn->query($sql)){
                echo "working";
                header("location:res-list.php");
                exit;
            }else{
                die("Error:" .$this->conn->error);
            }


        }
        
            public function displayRes(){
                $sql ="SELECT * FROM reservation";
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

        public function deleteRes($id){
                        
                        
            $sql ="DELETE FROM reservation WHERE id = $id";
            $result = $this->conn->query($sql);


            if($result){

                header("location: res-list.php");

            }else{
                echo "NO DATA IN DATABASE." .$this->conn->error;
            

            }
        }

        public function updateRes($id,$trainerName,$date,$time){
            $sql = "UPDATE reservation SET trainer_name='$trainerName',date='$date',time ='$time' WHERE id ='$id'";  
            $result = $this->conn->query($sql);

            if($result == TRUE){
                
            header('location:res-list.php');
            }else{
                die('ERROR' .$this->conn->error);
            }
        } 
    }
    ?>