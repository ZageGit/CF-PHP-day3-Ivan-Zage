<?php 

// var_dump($_SESSION['user']);

if( isset($_SESSION['user'])!="" ) {
    header("Location: login.php");
    exit;
   }

   require_once 'actions/db_connect.php';
?>

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
               <th >Ingredients</th>
               <th >Allergens</th>
               <th >Price</th>
               <th >ImageLink</th>
               <th >Edit/Delete</th>
           </tr>
       </thead>
       <tbody>
           <?php 

           $sql = "SELECT * FROM meals";
           $result =  mysqli_query($connect, $sql);//  $connect->query($sql);

           if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                echo  "<tr>
                       <td>" .$row['meal_name']."</td>
                       <td>" .$row['ingredients']."</td>
                       <td>" .$row['allergens']."</td>
                       <td>" .$row['price']."</td>
                       <td>" .$row['image_link']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;

             }
           } else {
              echo "No date available!";
           }

           ?>
       </tbody>
   </table>
</div>

</body>
</html>