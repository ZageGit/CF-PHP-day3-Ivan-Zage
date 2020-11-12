<!DOCTYPE html>
<html>
<head>
   <title>Meal  |  Add Meal</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset >
   <legend>Add Meal</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Name</th >
               <td><input  type="text" name="meal_name"  placeholder="Name" /></td >
           </tr>    
           <tr>
               <th>Ingredients_1</th>
               <td><input  type="text" name= "ingredient_1" placeholder="Ingredients" /></td>
           </tr>
           <tr>
               <th>Ingredients_2</th>
               <td><input  type="text" name= "ingredient_2" placeholder="Ingredients" /></td>
           </tr>
           <tr>
               <th>Ingredients_3</th>
               <td><input  type="text" name= "ingredient_3" placeholder="Ingredients" /></td>
           </tr>

           <tr>
               <th>Allergens</th>
               <td><input type="text"  name="allergens" placeholder ="Ingredients" /></td>
           </tr>
           <tr>
               <th>Price</th>
               <td><input type="text"  name="price" placeholder ="Price"/></td>
           </tr>
           <tr>
               <th>ImageLink</th>
               <td><input type="text"  name="image_link" placeholder ="ImageLink"/></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert meal</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>