<table border =1 >
<tr> <td>cus_ID</td><td>cus_Fname</td><td>cus_Lname</td><td>cus_BDate</td><td>cus_Gender</td><td>cus_Nphone</td>
<td>cus_Email</td><td>Trainer_ID</td></tr>
<?php echo "<br>Are you sure to delete this customer<br>
             <td>$customer->cus_ID</td> <td>$customer->cus_Fname</td> <td>$customer->cus_Lname</td> <td>$customer->cus_BDate</td>
             <td>$customer->cus_Gender</td> <td>$customer->cus_Nphone</td> <td>$customer->cus_Email</td> <td>$customer->Trainer_ID</td>";
             echo"</tabel>";
             ?>
             
             <form method="get" action="">
             <input type ="hidden"name="controller" value="customer"/>
             <input type ="hidden"name="cus_ID" value="<?php echo $customer->cus_ID;?>"/>
            
             
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="delete">delete</button>
</form>