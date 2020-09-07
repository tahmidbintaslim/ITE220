<?php 

$seatsPrice = array(
    'A1' => 3000,
    'A2' => 3000,
    'A3' => 3000,
    'B1' => 2000,
    'B2' => 2000,
    'B3' => 2000,
    'C1' => 1000,
    'C2' => 1000,
    'C3' => 1000
);

$totalPrice = 0;
$noSeat = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Result by Pathompong Phongsaporamut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style> body,html { height:100%; } </style>
</head>
<body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="jumbotron text-center">
                <h1>Tickets Receipt</h1>
                <hr class="my-2">
                <p>
                <?php
                    foreach($seatsPrice as $seat => $price) {
    
                        if (isset($_POST[$seat])){

                            if ($seat === 'A3') {

                                $luckyPrice = $price/2;

                                echo $seat.": ".$luckyPrice." THB <span class='text-danger font-italic'>*lucky draw 50% off*</span><br>";
                                $totalPrice += $luckyPrice;

                            } else {
                                echo $seat.": ".$price." THB<br>";
                                $totalPrice += $price;
                            }

                            $noSeat++;
                        }
                       
                    }

                    if ($noSeat === 0) {
                        echo "<span style='color:#FF0000;'>Please select some ticket</span>";
                        echo "<script type='text/javascript'>alert('Please select some ticket!'); window.location.href='concert.php';</script>";
                    
                    } elseif ($noSeat > 4) {
                        echo "<script type='text/javascript'>alert('Maximum 4 Seats!'); window.location.href='concert.php';</script>";
                    
                    } else {
                        echo "<br>Number of seats: <span class='font-weight-bold'>".$noSeat."</span><br>Total Price: <span class='font-weight-bold'>".$totalPrice." THB</span>";
                    }
                ?>
                </p>
                <p class="lead">
                    <a class="btn btn-info" href="concert.php" role="button"><< Back</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>