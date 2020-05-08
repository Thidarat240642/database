<?php
$controllers = array('pages'=>['home','error'],'customer'=>['index','newcustomer','addcustomer','updateform','update']
,'trainer'=>['index','newtrainer','addtrainer','updateform','update']);
//list controller and action
function call($controller, $action)
{
 require_once("controllers/".$controller."_controller.php");
 switch($controller)
 {
     case "pages": $controller =new PagesController();
                   break;

     case "customer": require_once("models/customerModel.php");
                      require_once("models/trainerModel.php");
                      $controller = new CustomerController();
                      break;
     case "trainer":  require_once("models/trainerModel.php");
                      $controller = new TrainerController();
                      break;
 }
 $controller->{$action}();

}
if(array_key_exists($controller,$controllers))
{
if(in_array($action,$controllers[$controller]))
{
    call($controller,$action);
}
else
{
call('pages','error');
}
}
else
{
call('pages','error'); }
?>
