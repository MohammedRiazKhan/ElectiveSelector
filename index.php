<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elective Picker</title>

    <link href="css/main.css" rel="stylesheet">

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12" id="login-form">
                <h5>Login to choose your elective</h5>
                <hr />
                <form action="ChooseElective" method="post">
                    <div class="form-group">
                        <label for="studentNum">Student Number</label>
                        <input type="text" id="studentNum" class="form-control" placeholder="Enter Student Number">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
</body>
</html>
