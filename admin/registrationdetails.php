<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminPanel/registration details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <header class="bg-dark text-white text-center py-4">
    <h1>Welcome to HansaCoco (pvt) Ltd</h1>
  </header>
  
  <div class="row">
    <div class="col-lg-4 d-flex flex-column ">
      <nav class="bg-primary text-white p-4" style="width: 200px; height: 100%; position: fixed;">
        <a href="admin/adminindex.php" class="text-white text-decoration-none d-block py-2">Add Item</a>
        <a href="admin/registrationdetails.php" class="text-white text-decoration-none d-block py-2">Registration Details</a>
        <a href="#" class="text-white text-decoration-none d-block py-2">Settings</a>
        <!-- Add more links as needed -->
      </nav>
    </div>
  
    <section class="ml-220 p-4">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>2023-01-01</td>
            <td>
              <button class="btn btn-primary">Update</button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
          
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </section>
  </div>

  <!-- <footer class="bg-dark text-white text-center py-4 fixed-bottom">
    &copy; 2023 Admin Panel
  </footer> -->

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
