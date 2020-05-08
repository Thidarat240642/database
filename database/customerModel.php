<?php
class customer{
        public $cus_ID ;
        public $cus_Fname ;
        public $cus_Lname ;
        public $cus_BDate ;
        public $cus_Gender ;
        public $cus_Nphone ;
        public $cus_Email ;
        public $Trainer_ID ;
        //add methond here
        public function customer($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID)
        {
                $this->cus_ID = $cus_ID;
                $this->cus_Fname = $cus_Fname ;
                $this->cus_Lname = $cus_Lname ;
                $this->cus_BDate = $cus_BDate ;
                $this->cus_Gender = $cus_Gender ;
                $this->cus_Nphone = $cus_Nphone ;
                $this->cus_Email = $cus_Email ;
                $this->Trainer_ID = $Trainer_ID ;
        }
        public static function getAll()
        {
                $customerlist = [] ;
                require("connection_connect.php");
                $sql = "select * from customers";
                $result = $conn->query($sql);
                while($my_row=$result->fetch_assoc())
                {
                        $cus_ID =$my_row['cus_ID'];
                        $cus_Fname =$my_row['cus_Fname'];
                        $cus_Lname =$my_row['cus_Lname'];
                        $cus_BDate =$my_row['cus_BDate'];
                        $cus_Gender=$my_row['cus_Gender'] ;
                        $cus_Nphone =$my_row['cus_Nphone'];
                        $cus_Email =$my_row['cus_Email'];
                        $Trainer_ID =$my_row['Trainer_ID'];  
                        $customerlist[]=new customer($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID);
                }
                require("connection_close.php");
                return $customerlist;
        }
        public static function Add($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `customers`(`cus_ID`, `cus_Fname`, `cus_Lname`, `cus_BDate`, `cus_Gender`, `cus_Nphone`, `cus_Email`, `Trainer_ID`) 
        VALUES ($cus_ID,'$cus_Fname','$cus_Lname','$cus_BDate','$cus_Gender','$cus_Nphone','$cus_Email',$Trainer_ID)";
        $result= $conn->query($sql);
        if($result === TRUE)
        {
                $last_id=$conn->insert_id ;
                echo "new recode create successfully :".$last_id ;
        }
        else 
        echo "Error :".$sql."<br>".$conn->error;
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function update($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID)
    {

        require("connection_connect.php");
        $sql="UPDATE `customers` SET `cus_ID`= $cus_ID,`cus_Fname`='$cus_Fname',`cus_Lname`='$cus_Lname',`cus_BDate`='$cus_BDate',`cus_Gender`='$cus_Gender'
        ,`cus_Nphone`='$cus_Nphone',`cus_Email`='$cus_Email',`Trainer_ID`=$Trainer_ID WHERE cus_ID = $cus_ID";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row ";
    }
    public static function delete($cus_ID)
    {
        require_once("connection_connect.php");
        $sql ="Delete from customer Where cusid='$cus_ID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
     /*
    public staticfunction search($key)
    {
        require("connection_connect.php");
        $sql="select * from customer,trainer where (cus_ID like'%$key%'or cus_Fname like'%$key%' or cus_Lname like'%$key%'
              or cus_BDate like'%$key%' or cus_Gender like'%$key%' or cus_Nphone like'%$key%' or cus_Email like'%$key%'
              or Trainer_ID like'%$key%') and cust=tID";
              $result=conn->query($sql);
              while($my_row = result->fetch_assoc())
              {
                $cus_ID =$my_row[cus_ID];
                $cus_Fname =$my_row[cus_Fname];
                $cus_Lname =$my_row[cus_Lname];
                $cus_BDate =$my_row[cus_BDate];
                $cus_Gender=$my_row[cus_Gender] ;
                $cus_Nphone =$my_row[cus_Nphone];
                $cus_Email =$my_row[cus_Email];
                $Trainer_ID =$my_row[Trainer_ID];  
                $customerlist[]=new customer($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID);
              }
              require("connection_close.php");

              return $customerlist;
    }
    */
    public static function get($cus_ID) {
        require ("connection_connect.php"); 
       $sql = "SELECT  * FROM customers  WHERE cus_ID = $cus_ID"; 
       $result = $conn ->query($sql) ;
        $my_row = $result -> fetch_assoc() ; 
        $cus_ID =$my_row['cus_ID'];
        $cus_Fname =$my_row['cus_Fname'];
        $cus_Lname =$my_row['cus_Lname'];
        $cus_BDate =$my_row['cus_BDate'];
        $cus_Gender=$my_row['cus_Gender'] ;
        $cus_Nphone =$my_row['cus_Nphone'];
        $cus_Email =$my_row['cus_Email'];
        $Trainer_ID =$my_row['Trainer_ID'];  
       require ("connection_close.php");
        return new customer($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID); }
        
}
?>