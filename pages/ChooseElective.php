<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>

    <link rel="stylesheet" href="../css/main.css">

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php

        require_once('../dbconnector.php');

        if(isset($_POST['login']))
        {
            $studentNumber = $_POST['studentNum'];

            $query = "SELECT studentNumber FROM STUDENT WHERE studentNumber = '$studentNumber' AND electiveId IS NULL";

            $result = mysqli_query($dbconnect, $query);

            $row = mysqli_fetch_array($result);

            $count = mysqli_num_rows($result);

            if($count == 1){

                //redirects to the chooseElectivePage if successful
                //header("location: pages/ChooseElective.php");
                $user = $studentNumber;

                $getElectives = "SELECT electiveId, electiveName FROM ELECTIVE";

                $courseResult = mysqli_query($dbconnect, $getElectives);

            }
            else{
                header("location: errorLogin.php");
               
            }
            
        }

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12" id="login-form">
                <div>
                    <h5>Choose Elective </h5>
                    <p class="text-right">
                        <?php 
                        
                            echo "Student#:" . " $user" ;

                        ?>
                    </p>
                </div>
               
                <hr />
                <form action="Selection.php" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="firstChoice">Elective Choice</label>
                            <select class="form-control" id="firstChoice" name="electiveChoice">
                                <?php 
                                
                                    if($courseResult){
                                        while($courseRow = mysqli_fetch_array($courseResult)){
                                        
                                            echo "<option value='".$courseRow['electiveId']."' name='c'>".$courseRow['electiveName']."</option>";

                                        }
                                    }
                                
                                ?>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="studNum" value="<?php echo $studentNumber?>"> 

                    <button type="submit" name="saveSelection" class="btn btn-primary">Save</button>
                    <button type="cancel" name="cancel" class="btn btn-primary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/bootstrap/bootstrap.js"></script>
</body>
</html>
