<?php
    include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Project</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">   

        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Insert New Company Data</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                       
                        <form action="" method="POST">
                            <div class="from-group p-3">
                                <!-- <label for="firstname">First Name</label> -->
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required="required">
                            </div>
                            <div class="from-group p-3">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required="required">
                            </div>
                            <div class="from-group p-3">
                                <input type="text" name="businessname" class="form-control" placeholder="Business Name" required="required">
                            </div>
                            <div class="from-group p-3">
                                <input type="text" name="emailaddress" class="form-control" placeholder="Email Address" required="required">
                            </div>
                            <div class="from-group p-3">
                                <input type="text" name="password" class="form-control" placeholder="Password" required="required">
                            </div>
                            <div class="from-group p-3">
                                <input type="text" name="cpassword" class="form-control" placeholder="Confirm Password" required="required">
                            </div>
                            
                            <div class="from-group p-3">
                                <input type="submit" name="register" class="btn btn-primary " value="Register">
                            </div>
                            
                        </form>
                     </div>
                    
                </div>
                   
            </div>
        </section>
        <?php

            if(isset($_POST['register'])){
                echo "hy you";
            }
        ?>

       

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        
    </body>
</html>