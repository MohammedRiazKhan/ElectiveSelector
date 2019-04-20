<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php

        $selection = "";

        if(isset($_POST['saveSelection']))
        {
            
        }
        else if(isset($_POST['cancel'])){

            header("location: ../index.php");

        }

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12" id="login-form">
                <h5>Your Selection</h5>
                <hr />
                <h6>You chose</h6>
                <p><?php echo $selection?></p>

                <br />
                <button type="submit" class="btn btn-primary">Exit</button>
            </div>
        </div>
    </div>
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/bootstrap/bootstrap.js"></script>
</body>
</html>
