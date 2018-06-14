<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
</head>
<body>

    <div class="signup-form">
        <form action="#" class="form-group" method="post">

            <h2>Add Item Details</h2>

            <div class="form-group" data-ng-app="" data-ng-init="a=0;b=0;c=0">
                <div class="row">

                        <div class="form-group">
                            <select class="form-control form-control-lg" name="type">
                                    <option>Select Type of Item</option>
                                    <option value="carton">Carton</option>
                                    <option value="envelope">Envelope</option>
                                    <option value="skid">Skid</option>
                            </select>
                        </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="weigth" placeholder="Weigth" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="length" placeholder="Length" ng-model="a">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="width" placeholder="Width"  ng-model="b">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="heigth" placeholder="Heigth" ng-model="c">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="qty" placeholder="Qty" >
                    </div>



                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Next
                        <span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                

                </div>

                <div class="form-group">
                    <label>Volume of the Box: {{a * b * c}}</label>
                </div>
            </div>

            

        </form>


    </div>


<?php
    include_once 'config.php';

    if(isset($_POST['submit'])){
        $type = $_POST['type'];
        $weigth = $_POST['weigth'];
        $length = $_POST['length'];
        $width = $_POST['width'];
        $heigth = $_POST['heigth'];
        $qty = $_POST['qty'];
        $volume = 0;

        $volume = $length * $width * $heigth /1000000 * 250;

        $res = "INSERT INTO `dimen`(`id`, `type`, `weigth`, `length`, `width`, `heigth`, `qty`, `volume`)
         VALUES (NULL,'$type','$weigth','$length','$width','$heigth','$qty','$volume')";
        $sql = mysqli_query($con,$res);
        header('Location:display.php');
    }
?>
    


</body>
</html>