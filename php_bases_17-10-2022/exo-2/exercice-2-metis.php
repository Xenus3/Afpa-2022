<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $temps = getdate();
        echo  "En ce " . $temps["mday"] .' '. $temps["month"] .' '.$temps["year"] .' '."sur le serveur" .' '. $_SERVER['SERVER_NAME'] .' '. $temps["hours"] . ":" . $temps["minutes"] . ' ' . "votre adress IP est: " . $_SERVER['REMOTE_ADDR'];

         
?>
<table>
            <tr>
                <th>Variable</th> <th>Valeur</th>
                
            </tr>
    <?php
        $array = getenv();
       foreach($array as $key => $value) {
        echo  "<tr>
                <td>". $key." </td><td>". $value." </td>
       </tr>";
      }
       
        
        
          
         ?>
        
         
         </table>
         
    
</body>
</html>