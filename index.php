<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elective Selector</title>

    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <?php

        require_once('dbconnector.php');

        //form posting to itself
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $studentNumber = $_POST['studentNum'];

            $query = "SELECT studentNumber FROM STUDENT WHERE studentNumber = '$studentNumber'";

            $result = mysqli_query($dbconnect, $query);

            $row = mysqli_fetch_array($result);

            $count = mysqli_num_rows($result);

            if($count == 1){

                //redirects to the chooseElectivePage if successful
                header("location: pages/ChooseElective.php");
                $error = "";

            }
            else{
                $error = "Invalid student number";
            }
            
        }

        mysqli_close($dbconnect);

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12" id="login-form">
                <h5>Login to choose your elective</h5>
                <hr />
                <form action="pages/ChooseElective.php" method="post" onsubmit="return validateLogin()">
                    <div class="form-group">
                        <label for="studentNum">Student Number</label>
                        <input type="text" id="studentNum" name="studentNum" class="form-control" placeholder="Enter Student Number">
                    </div>
                    <p id="errorMessage" style="color:red"></p>
                    <button type="submit" name="login" class="btn btn-primary" style="margin-top:10px">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
