<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action=$_GET['action'];
}
else
{
    $controller = 'pages';
    $action= 'home';
}
?>
<!doctype html>
<html>
<body>
<?php echo "controller=".$controller.",action =".$action ;?> 
<br>[<a href="">Home </a>][<a href="?controller=customer&action=index"> customer</a>]
[<a href="?controller=trainer&action=index"> trainer</a>] <br>

<?php require_once("routes.php");?>
</body>
</html>