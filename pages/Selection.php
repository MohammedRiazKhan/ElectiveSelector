<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php

        require_once('../dbconnector.php');

        if(isset($_POST['saveSelection']))
        {
            $selection = $_POST['electiveChoice'];
            $studentNum = $_POST['studNum'];
            $updateStudent = "UPDATE STUDENT SET electiveId = $selection WHERE studentNumber = $studentNum";
            
            mysqli_query($dbconnect, $updateStudent);

            $selectedElective = "SELECT electiveName FROM ELECTIVE WHERE electiveId = $selection";
        
            $electiveResult = mysqli_query($dbconnect, $selectedElective);

            $row = mysqli_fetch_array($electiveResult);

        }
        else if(isset($_POST['cancel'])){


            echo "<script> alert('asd') </script>";

            header("location: ../index.php");

        }

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12" id="login-form">
                <h5>Your Selection</h5>
                <p class="text-right">
                        <?php 
                        
                            echo "Student#:" . " $studentNum" ;

                        ?>
                    </p>
                <hr />
                <h6>You chose</h6>
                <p><?php echo $row['electiveName'];?></p>


                <br />
                <form action="http://localhost/ElectiveSelector/index.php" method="post">
                    <button type="submit" class="btn btn-primary">Exit</button>
                </form>
               
            </div>
        </div>
    </div>
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/bootstrap/bootstrap.js"></script>
</body>
</html>
