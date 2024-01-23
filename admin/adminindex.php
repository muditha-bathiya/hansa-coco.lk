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

  <div class="col-lg-8 d-flex flex-column">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <form enctype="multipart/form-data">
            <div class="mb-3">
              <label for="image" class="form-label">Image:</label>
              <input type="file" id="image" name="image" class="form-control" accept="image/*" required="">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description:</label>
              <textarea id="description" name="description" class="form-control" required=""></textarea>
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Price:</label>
              <input type="text" id="price" name="price" class="form-control" required="">
            </div>

            <div class="mb-3">
              <label for="status" class="form-label">Status:</label>
              <select id="status" name="status" class="form-select" required="">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Insert Page</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  

  <!-- <footer class="bg-dark text-white text-center py-4 fixed-bottom">
    &copy; 2023 Admin Panel
  </footer>
 -->
  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
