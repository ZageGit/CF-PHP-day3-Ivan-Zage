<?php  require_once 'actions/db_connect.php' ?>

<html>
<head>
   <title>Meals</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageMeal">
   <a href= "create.php"><button type="button" >Add Meal</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Name</th>
               <th >Price</th>
               <th >Ingredients</th>
               <th >Allergens</th>
               <th >ImageLink</th>
           </tr>
       </thead>
       <tbody>
           
       </tbody>
   </table>
</div>

</body>
</html>