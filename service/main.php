<?php 
    include "connect.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    </head>
    <body>

    <div class="container">
        <br><br>
        <div class="col-md-5">
      <form action="main.php" method="get">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search Customer Name Here..."/>
        </div>
        <div class="form-group">
            <input type="submit" name="search_btn" class="btn btn-default" value="Search"/>
        </div>
      </form>

      <?php
        if(isset($_GET['search_btn'])){

            $search_var = $_GET['search'];

            $sql = "SELECT * FROM users WHERE userName LIKE '%".$search_var."%'";
            if($res = $link->query($sql)){

        ?>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Custmer id</th>
                    <th>Customer Name</th>
                  </tr>
                </thead>
                <tbody>
        <?php
            if($res->num_rows > 0){

                while($row = $res->fetch_assoc()){
        ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['userName'];?></td>
                    </tr>
        <?php   
                }   
            }
            else
            {
        ?>
                <tr>
                    <td colspan="2">Not Found<?php echo $link->error;?></td>
                </tr>   
        <?php       
            }
        ?>
                </tbody>
            </table>
        <?php
            }
            else
            {
                echo "Failed".$sql;
            }
        }
      ?>
      </div>
    </div>

    </body>