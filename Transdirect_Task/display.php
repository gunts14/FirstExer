<!DOCTYPE html>
<html>
<head>
   <title>Display</title>

       <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
   
   <h2>Table</h2>
                        <a href="http://localhost/box/" <button style="float:right" class="btn btn-warning">Back
                       <span class="glyphicon glyphicon-chevron-left"></span></button></a>
   <table align="center" width="90%" class="table table-striped">
           <thead>
               <tr>
                   <th>#</th>
                   <th>TYPE</th>
                   <th>WEIGHT</th>
                   <th>LENGTH</th>
                   <th>WIDTH</th>
                   <th>HEIGHT</th>
                   <th>QUANTITY</th>
                   <th>VOLUME</th>
                   <th>OPTION</th>
               </tr>
           </thead>

           <?php
               include_once 'config.php';
                   $res = "SELECT * FROM dimen";
                   $sql = mysqli_query($con,$res);
                   $num_rows = mysqli_num_rows($sql);
                   if($num_rows > 0){
                     while($row = mysqli_fetch_array($sql)){ ?>
                    <tr>
                       <td><?php echo $row[0] ?></td>
                       <td><?php echo $row[1] ?></td>
                       <td><?php echo $row[2] ?></td>
                       <td><?php echo $row[3] ?></td>
                       <td><?php echo $row[4] ?></td>
                       <td><?php echo $row[5] ?></td>
                       <td><?php echo $row[6] ?></td>
                       <td><?php echo $row[7] ?></td>
                       <td><a href="box.php?type=<?php echo $row[1]?>&length=<?php echo $row[3]?>&width=<?php echo $row[4]?>&heigth=<?php echo $row[5]?>&qty=<?php echo $row[6]?>&weigth=<?php echo $row[2]?>"><button class="btn btn-primary" name="submit">Prefered Box
                       &nbsp;<span class="glyphicon glyphicon-log-in"></span></button>
                       </a></td>
                     </tr>
                   <?php  
               }
               
           }
            ?>  
   </table>
</div>
</body>
</html>