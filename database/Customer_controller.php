<?php
class CustomerController
{
    public function index()
    {
        $customer_list = customer::getAll();
        require_once('views/customer/index_customer.php') ;
    }
    public function newcustomer()
    {
        $trainer_list = trainer::getAll();
        require_once('views/customer/newcustomer.php') ;
    }
    public function addcustomer()
    {
        $cus_ID =$_GET['cus_ID'];
        $cus_Fname =$_GET['cus_Fname'];
        $cus_Lname =$_GET['cus_Lname'];
        $cus_BDate =$_GET['cus_BDate'];
        $cus_Gender=$_GET['cus_Gender'] ;
        $cus_Nphone =$_GET['cus_Nphone'];
        $cus_Email =$_GET['cus_Email'];
        $Trainer_ID =$_GET['Trainer_ID']; 
        
        customer::Add($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID);
        CustomerController::index(); 
        
    }
   public function updateform()
   {
        error_reporting(~E_NOTICE);
        $cus_ID =$_GET['cus_ID'];
        $customer = customer::get($cus_ID);
        $trainer_list = trainer::getAll();
        require_once('views/customer/updateform.php');

   }
    public function update()
   {
    $cus_ID =$_GET['cus_ID'];
    $cus_Fname =$_GET['cus_Fname'];
    $cus_Lname =$_GET['cus_Lname'];
    $cus_BDate =$_GET['cus_BDate'];
    $cus_Gender=$_GET['cus_Gender'] ;
    $cus_Nphone =$_GET['cus_Nphone'];
    $cus_Email =$_GET['cus_Email'];
    $Trainer_ID =$_GET['Trainer_ID']; 


    customer::update($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID);
    CustomerController::index(); 
   }
   
}
?>