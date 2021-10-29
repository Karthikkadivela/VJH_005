<?php
    $id=$_GET["sr_no"];
    echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Donor Registration</title>
</head>
<body>
    <!-- navbar part -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Health</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
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



    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="./process_add_donor.php" method="POST">
                <input type="hidden" name="srno" value="<?php echo $id ?>"> 
                <div class="card mt-4">
                  <h5 class="card-title ms-3 mt-2">Donor Registration Form</h5>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" id="dname" class="form-control" placeholder="Name" name="dname">
                          <label for="dname">Name:</label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" id="age" class="form-control" placeholder="Age" name="dage">
                          <label for="age">Age:</label>
                          
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="bloodgrp" placeholder="Blood Group" name="bloodgrp">
                          <label for="bloodgrp">Blood Group:</label>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" id="phone" class="form-control" placeholder="phone" name="phone">
                          <label for="phone">Phone:</label>
                        </div>
                      </li>
                  </ul>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>