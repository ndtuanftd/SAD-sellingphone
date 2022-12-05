<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin - manage users</title>
</head>

<body>

  <!-- navbar -->

  <div class="mngUser-container">
    <!-- search bar -->
    <div class="search-bar">
      <div class="input-group">
        <input class="form-control border-end-0 border rounded-pill" type="text" id="example-search-input"
          placeholder="search...">
        <span class="input-group-append">
          <button class="btn btn-primary border-start-0 border rounded-pill ms-n3" type="button">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </div>

    <!-- user datatable -->
    <div class="user-datatable">
      <table class="table table-hover">
        <thead class="table-light">
          <tr>
            <th class="col-md-4">USERNAME</th>
            <th class="col-md-6">EMAIL</th>
            <th class="col-md-4"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>admin</th>
            <th>trinhpham@company.com</th>
            <th><button class="btn btn-primary"><a href="index.php?page=admin-purchaseDetail" style="color: white">View Purchases</a></button></th>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th>jannecooper</th>
            <th>jannecooper@company.com</th>
            <th><button class="btn btn-primary"><a href="index.php?page=admin-purchaseDetail" style="color: white">View Purchases</a></button></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
</body>

</html>