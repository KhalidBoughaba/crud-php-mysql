<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });

        let logout = document.querySelector(".logout");
        logout.addEventListener('click', ()=>{

        })
    </script>
</head>
<body>
    <div>
        <form action="/home/logout.php" method="post">
            <button type="submit" class="btn logout">Logout</button>
        </form>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="../crud/create.php" class="btn pull-right">Add New Employee</a>
                    </div>
                    <?php 
                    // Include config file
                    require_once "../config.php";
                    // Attempt select query execution
                    $sql ="SELECT * FROM employees";
                    if($result = $con->query($sql)){
                        include "table.php";
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    // Close connection
                    unset($con);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>