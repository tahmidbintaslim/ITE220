<?php

$seats = array(
    "A1","A2","A3","B1","B2","B3","C1","C2","C3"
);

$noSeat = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Assignment by Pathompong Phongsaporamut</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <form method="POST" action="concertResult.php">
            <div class="form-group">
                <h3 class="my-4 text-center">Private Concert<p class="lead">Choose your seats <span class="text-danger font-italic">(Maximum 4 tickets)</p></h3>
                
                <?php

                    foreach($seats as $seat) {

                        if ($noSeat%3 === 0){
                            echo "<div class='row my-3'>";
                        }

                        echo "
                        <div class='col text-center'>
                        <div class='form-check'>
                            <input style='width: 20px; height: 20px;' class='form-check-input' type='checkbox' value=".$seat." id=".$seat." name=".$seat.">
                            <label class='form-check-label ml-2 h6' for=".$seat.">".$seat."</label>
                        </div></div>";

                        if ($noSeat%3 === 2){
                            echo "</div>";
                        }

                        $noSeat++;
                        
                    }

                ?>
                <div class="row my-4">
                    <button type="submit" class="btn btn-primary mx-auto">Buy now!</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>