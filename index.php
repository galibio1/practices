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
           <div class="Container">
               <div class="row">
                   <div class="mx-auto">
                        <h2>All Company List</h2>

                        
                   </div>
                   <div class="col-md-4">
                       <a href="addCompany.php" class="btn btn-primary">Register Company</a>
                   </div>
               </div>
                <div class="row">
                    <div class="mx-auto">
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Business Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $query = " SELECT * FROM company";
                                    $allUsers = mysqli_query($db, $query);

                                    while( $row = mysqli_fetch_assoc($allUsers) ){
                                        $id             =$row['id'];
                                        $firstname      =$row['first_name'];
                                        $lastname       =$row['last_name'];
                                        $emailaddress   =$row['email_address']; 
                                        $businessname   =$row['business_name']; ?>
                                        

                                        <tr>
                                        <th scope="row"><?php echo $id; ?></th>
                                        <td><?php echo $firstname; ?></td>
                                        <td><?php echo $lastname; ?></td>
                                        <td><?php echo $emailaddress; ?></td>
                                        <td><?php echo $businessname; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="index.php" class=" btn btn-success btn-sm">Update</a>
                                                <a href="index.php?delete=success" class=" btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </td>
                                        </tr>

                                        <?php
                                    }
                                ?>


                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
       </section>

      

       <?php
        if(isset($_GET['delete'])){
            $query = "DELETE FROM company WHERE id =$id ";
            if (mysqli_query($db, $query)) {
                echo " record deleted successfully";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($db);
            }
        }
       ?>

        <!-- <div>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">Text</li>
                <li class="list-group-item list-group-item-action">Text</li>
            </ul>
        </div> -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>