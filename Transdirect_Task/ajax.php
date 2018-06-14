<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="head">
            <div class="row head-title">
                <h1>Choose Couriers</h1>
            </div>
        </div>
        <div class="receipt-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="receipt-body">

                        <div class="form-group">
                            <h2>Receipt</h2>
                        </div>

                        <div class="form-group">
                            <strong>Type: </strong>
                            <?php echo $_POST['type']; ?>
                        </div>

                        <div class="form-group">
                            <strong>Weigth: </strong>
                            <?php echo $_POST['weigth']; ?>
                        </div>

                        <div class="form-group">
                            <strong>Length: </strong>
                            <?php echo $_POST['length']; ?>
                        </div>

                        <div class="form-group">
                            <strong>Width: </strong>
                            <?php echo $_POST['width']; ?>
                        </div>

                        <div class="form-group">
                            <strong>Heigth: </strong>
                            <?php echo $_POST['heigth']; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="couriers-body">

                        <div class="form-group">
                            <h1>Choose Couriers</h1>

                            <?php

                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);
                    $ch = curl_init();

                    # Setup request to send json via POST.
                    $payload = json_encode(array(
                        "declared_value"=> "0.00",
                         "items" => array(
                             array(
                                "weight"=> $_POST['weigth'],
                                "height"=> $_POST['heigth'],
                                "width"=> $_POST['width'],
                                "length"=> $_POST['length'],
                                "quantity"=> 1,
                                "description"=> $_POST['type'],
                             )
                         ),
                         "sender"=> array(
                             "postcode"=> "2000",
                             "state"=> "NSW",
                             "suburb"=> "SYDNEY",
                             "type"=> "business",
                             "country"=> "AU"
                         ),
                         "receiver"=> array(
                            "postcode"=> "3000",
                            "state"=> "VIC",
                            "suburb"=> "MELBOURNE",
                            "type"=> "business",
                            "country"=> "AU"
                        )
                    ));

                    curl_setopt($ch, CURLOPT_URL,"https://www.transdirect-staging.us-east-1.elasticbeanstalk.com/api/quotes");
                    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
                    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Api-Key:e13ded2a10d9f5316618eb87fdee583f'));
                    # Return response instead of printing.
                    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    # Send request.
                    $result = curl_exec($ch);
                    $err = curl_error($ch);
                    curl_close($ch);
                    if ($err) {
                     echo "cURL Error #:" . $err;
                    }else {
                        $temp_arr = json_decode($result, true);

                    ?>

                                <table align="center" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Courier</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <?php 
                                foreach ($temp_arr['quotes'] as  $key =>$r){
                             ?>

                                        <tr>

                                            <td>
                                                <?php print_r($key); ?>
                                            </td>

                                            <td>
                                                <?php print_r($r['total']); ?>
                                            </td>

                                            <td>
                                                <button class="btn-primary">Book Now</button>
                                            </td>

                                            <?php 
                             }
                                echo "</tr>";
                              ?>
                                </table>

                                <?php 
                        }
                     ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>