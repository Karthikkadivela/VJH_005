<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Schemes</title>
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
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            <form action="process_schemes.php">

                <div class="card mt-4">
                  <h5 class="card-title ms-3 mt-2">Add a Health Scheme</h5>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon1">Scheme Name:</span>
                          <input type="text" class="form-control" placeholder="Scheme name" aria-label="Scheme name" aria-describedby="basic-addon1" name="sname">
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon2">Scheme Type:</span>
                          <input type="text" class="form-control" placeholder="Scheme Type" aria-label="Scheme type" aria-describedby="basic-addon2" name="stype">
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon3">Health Center Name:</span>
                          <input type="text" class="form-control" placeholder="Health Center Name" aria-label="Health Center Name" aria-describedby="basic-addon3" name="shealthcenter">
                          </div>
                      </li>

                      <li class="list-group-item">
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon4">Address:</span>
                          <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon4" name="address">
                        </div>
                      </li>

                      <li class="list-group-item">
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon5">Pincode:</span>
                            <input type="text" class="form-control" placeholder="Pincode" aria-label="Pincode" aria-describedby="basic-addon5" name="pin">
                          </div>
                      </li>
                  </ul>
                  <a class="btn btn-primary">Submit</a>
                </div>

        </div>
        <div class="col-4"></div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>