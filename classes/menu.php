<?php
    include 'database.php';

    class Menu extends Database{
    
        public function addMenu($training_date,$trainingName,$Sets,$Reps){
                 $sql = "INSERT INTO menu(training_date, training_name,training_sets,training_reps)VALUES('$training_date','$trainingName','$Sets','$Reps')";
                 if($this->conn->query($sql)){
                     echo "working";
                     header("location: menu_list.php");

                 }else{
                     die('ERROR'.$this->conn->error);
                     //concatinator
                 }

        }

        public function displayMenu(){
            $sql ="SELECT * FROM menu";
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

        public function searchSpecificMenu($id){
            $sql = "SELECT * FROM menu WHERE id = '$id'";
            $result = $this->conn->query($sql);

            if($result == TRUE){

                $row = $result->fetch_assoc();

                return $row;
            }else{
                echo"NO DATA IN DATABASE." .$this->conn->error;            
            }
        }
    

        public function deleteMenu($id){
                    
                    
            $sql ="DELETE FROM menu WHERE id = $id";
            $result = $this->conn->query($sql);


            if($result){
                echo "working";
                header("location: menu_list.php");

            }else
            {
                echo "NO DATA IN DATABASE." .$this->conn->error;
            

            }
        }


        public function updateMenu($id,$trainingName,$training_date,$Sets,$Reps){
            $sql = "UPDATE menu SET training_name='$trainingName',training_date='$training_date',training_sets ='$Sets',training_reps='$Reps' WHERE id ='$id'";  
            $result = $this->conn->query($sql);

            if($result == TRUE){
                
            header('location:menu_list.php');
            }else{
                die('ERROR' .$this->conn->error);
            }
        } 
    }
?>