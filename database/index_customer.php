new customer <a href="?controller=customer&action=newcustomer">click</a><br>
<table border =1 >
<tr> <td>cus_ID</td><td>cus_Fname</td><td>cus_Lname</td><td>cus_BDate</td><td>cus_Gender</td><td>cus_Nphone</td>
<td>cus_Email</td><td>Trainer_ID</td></tr>
<?php foreach($customer_list as $customer_list)
{
    echo"
    <td>$customer_list->cus_ID</td> <td>$customer_list->cus_Fname</td> <td>$customer_list->cus_Lname</td> <td>$customer_list->cus_BDate</td>
    <td>$customer_list->cus_Gender</td> <td>$customer_list->cus_Nphone</td> <td>$customer_list->cus_Email</td> <td>$customer_list->Trainer_ID</td>
    <td><a href=?controller=customer&action=updateform&cus_ID=$customer_list->cus_ID>update</a></td> <td>delete</td></tr>";
}
    echo"</tabel>";
    ?>


