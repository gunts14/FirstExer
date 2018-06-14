<!DOCTYPE html>
<html>
<head>
   <title>Box</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
   <form action="ajax.php" method="post">
       <table class="table table-striped">

           <h2>BOXE`S INFORMATION</h2>
           <a href="http://localhost/box/display.php" <button style="float:right" class="btn btn-warning">Back
                       <span class="glyphicon glyphicon-chevron-left"></span></button></a>
                       <br>
           
                   <tr>
                       <th>TYPE</th>
                       <th>LENGTH</th>
                       <th>WIDTH</th>
                       <th>HEIGHT</th>
                       <th>VOLUME</th>
                       <th>OPTION</th>
                   </tr>
                   <tr>
                   <?php
                           $type = $_GET['type'];
                           $length = $_GET['length'];
                           $width = $_GET['width'];
                           $heigth = $_GET['heigth'];
                           $qty = $_GET['qty'];
                           $weigth = $_GET['weigth'];

                           $l = $length * $qty + 3;
                           $w = $width * $qty + 3;
                           $h = $heigth * $qty + 3;

                           $volume = $l * $w * $h /1000000 * 250;
                   ?>
                       <th><?php echo $type?></th>
                       <input type="hidden" name="type" value="<?php echo $type?>">
                       <th><?php echo $l?></th>
                       <input type="hidden" name="length" value="<?php echo $l?>">
                       <th><?php echo $w?></th>
                       <input type="hidden" name="width" value="<?php echo $w ?>">
                       <th><?php echo $h?></th>
                       <input type="hidden" name="heigth" value="<?php echo $h?>">
                       <th><?php echo $volume?></th>
                       <input type="hidden" name="weigth" value="<?php echo $weigth?>">
                       <th><button class="btn btn-primary">Get a quote</button></th>

       </table>
       
   </form>
</div>
</body>
</html>