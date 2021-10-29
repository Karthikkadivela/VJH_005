<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <title>Medical Schemes</title>
  </head>
  <body>
        <!-- carousel and navbar part -->
      <div class="row">
      
      </div>
      <!-- datatable part -->
      <div class="row">
        <div class="col-10">
            <table id="myTable" class="table">
          <thead>
           <tr>
                <th>ID</th>
                <th>Scheme Name</th>
                <th>Scheme Details</th>
                <th>Available At</th>
          </tr>
        </thead>

        <tbody>
            <tr>
              <td>ID</td>
              <td>Scheme name</td>
              <td>Scheme Details</td>
              <td>Available At</td>
            </tr>
          
        </tbody>

      </table>
        </div>
        
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


</html>