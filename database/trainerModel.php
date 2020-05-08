<?php
class trainer{
        public $Trainer_ID ;
        public $T_Fname ;
        public $T_Lname ;
        public $T_BDate ;
        public $T_Gender ;
        public $T_Nphone ;
        public $T_Email ;
        
        //add methond here
        public function trainer($Trainer_ID,$T_Fname,$T_Lname,$T_BDate,$T_Gender,$T_Nphone,$T_Email)
        {
                $this->Trainer_ID = $Trainer_ID;
                $this->T_Fname = $T_Fname ;
                $this->T_Lname = $T_Lname ;
                $this->T_BDate = $T_BDate ;
                $this->T_Gender = $T_Gender ;
                $this->T_Nphone = $T_Nphone ;
                $this->T_Email = $T_Email ;
                
        }
        public static function getAll()
        {
                $trainerlist = [] ;
                require("connection_connect.php");
                $sql = "select * from trainer";
                $result = $conn->query($sql);
                while($my_row=$result->fetch_assoc())
                {
                        $Trainer_ID =$my_row['Trainer_ID'];
                        $T_Fname =$my_row['T_Fname'];
                        $T_Lname =$my_row['T_Lname'];
                        $T_BDate =$my_row['T_BDate'];
                        $T_Gender=$my_row['T_Gender'] ;
                        $T_Nphone =$my_row['T_Nphone'];
                        $T_Email =$my_row['T_Email'];
                        
                        $trainerlist[]=new trainer($Trainer_ID,$T_Fname,$T_Lname,$T_BDate,$T_Gender,$T_Nphone,$T_Email);
                }
                require("connection_close.php");
                return $trainerlist;
        }
        
}
?>