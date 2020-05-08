<form method="get" action="">
<label>ID<input type="number" name = "cus_ID"/> </label><br>
<label>Firstname <input type="text" name="cus_Fname"/> </label><br>
<label>Lastname <input type="text" name="cus_Lname"/> </label><br>
<label>Birthday <input type="text" name="cus_BDate"/> </label><br>
<label>Sex <input type="text" name="cus_Gender"/> </label><br>
<label>Phone<input type="text" name="cus_Nphone"/> </label><br>
<label>Email <input type="text" name="cus_Email"/> </label><br>
<label>TrainerID <select name="Trainer_ID">
         <?php foreach($trainer_list as $t){echo "<option value =$t->Trainer_ID>$t->Trainer_ID</option>";}?>
         </select></label><br>
<input type ="hidden"name="controller" value="customer"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addcustomer">Save</button>
</form>
