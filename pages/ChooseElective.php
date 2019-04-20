<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>

    <link rel="stylesheet" href="../css/main.css">

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12" id="login-form">
                <h5>Choose Elective</h5>
                <hr />
                <form action="SelectionSaved" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="firstChoice">Choice 1</label>
                            <select class="form-control" id="firstChoice">
                                <option>Options from database</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-primary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/bootstrap/bootstrap.js"></script>
</body>
</html>
