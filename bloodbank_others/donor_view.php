<?php
    $servername="eu-cdbr-west-01.cleardb.com";
    $username="b7dffff1965848";
    $password="8dbc133f";
    $dbname="heroku_e2bd9c4063348fb";
  
    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed");
        echo"connection failed";
        return;
    } 

    $sql_query="select srno,name,phone from donors_tbl";
    $result=$conn->query($sql_query);
    
    $conn->close();
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <title>Blood Bank Search Repo</title>
  </head>
  <body style="background-color: LightYellow;">
        <!-- navbar part -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Health</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hospitals</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blood Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pharmacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Schemes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <div style="display:flex;justify-content: flex-start;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </div> 
              </ul>
            </div>
          </nav>

      <!-- datatable part -->
      <div class="row mt-4">
        <div class="col-1"></div>
        <div class="col-10 p-4" id="tbl-col" style="background-color:white;border:2px grey solid;margin-top:5%">
            <table id="myTable" class="table table-borderless">
              <thead>
                <tr>
                    <th>Camp ID</th>  
                    <th>Donor Name</th>
                  <th>Contact Details</th>
                  
                </tr>
              </thead>

              <tbody>
                  <?php while($row=mysqli_fetch_assoc($result)){ ?>        
                  <tr>          
                    <td><?php echo $row["srno"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["phone"]?></td>
                  </tr>
          <?php   } ?>
              </tbody>

            </table>
        </div>
        <div class="col-1"></div>
        
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

<script>
  $('#myTable').DataTable();
</script>





</html>