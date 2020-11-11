<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM meals WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Meals | update</title>
</head>
<body>

	<fieldset>
   <legend>Update user</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Name</th>
               <td><input type="text" name="meal_name" value="<?php echo $data['meal_name'] ?>"></td>
           </tr >    
           <tr>
               <th>ingredients</th>
               <td><input type="text" name="ingredients" value="<?php echo $data['ingredients'] ?>"></td >
           </tr>
           <tr>
               <th >Allergens</th>
               <td><input type="text" name="allergens" value="<?php echo $data['allergens'] ?>"></td>
           </tr>
             <tr>
               <th>Price</th>
               <td><input type="text" name="price" value="<?php echo $data['price'] ?>"></td>
           </tr>
            <tr>
               <th>Image</th>
               <td><input type="text" name="image_link" value="<?php echo $data['image_link'] ?>"></td>
           </tr>
           <tr>
               <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
               <td><button  type= "submit">Save Changes</button></td>
               <td><a href= "index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body>
</html>

<?php 
} else {
	echo "nothing";
}
?>