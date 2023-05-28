<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional array</title>
</head>
<body>
    <?php
    
    $students=[
        [1,'Amit',4,'2070-02-23','lagankhel'],
        [2,'bijay',6,'2060-03-04','kupandol'],
        [3,'miken',7,'2062-04-02','baneswor'],
    ];
    print_r($students);
    ?>
  
  <table border="1">
    <tr>
    <td>SN</td>
     <td>Name</td>
     <td>Roll</td>
     <td>DOB</td>
     <td>Address</td>
    </tr>
     
    <?php 
     for($i=0;$i<count($students);$i++){
        echo '<tr>';
        for($j=0;$j<count($students[$i]);$j++){
            echo '<td>'.$students[$i][$j].'</td>';
        }
        echo '</tr>';
        
     }
    ?>

  </table>
    
   
</body>
</html>