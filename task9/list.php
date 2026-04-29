<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="container my-5">
    <h2 class="mb-4">Employee List</h2>

    <div class="d-flex justify-content-end mb-3">
        <a href="registration.html" class="btn btn-success">
          <i class="bi bi-plus-circle me-1"></i> Add New Employee
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered align-middle">
              <thead class="table-primary">
                <tr>
                  <th>ID</th>
                  <th>Emp #</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Department</th>
                  <th>Position</th>
                  <th>Salary</th>
                  <th>Hire Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>EMP1001</td>
                  <td>Maria</td>
                  <td>Gonzalez</td>
                  <td>IT</td>
                  <td>Engineer</td>
                  <td>$72,000</td>
                  <td>2022-06-15</td>
                  <td>
                    <a href="view.html?id=1" class="text-primary me-2" title="View"><i class="bi bi-eye-fill"></i></a>
                    <a href="registration.html?id=1" class="text-warning me-2" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="delete.html?id=1" class="text-danger" title="Delete"><i class="bi bi-trash-fill"></i></a>
                  </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>EMP1002</td>
                    <td>John</td>
                    <td>Smith</td>
                    <td>Finance</td>
                    <td>Analyst</td>
                    <td>$65,000</td>
                    <td>2021-03-22</td>
                    <td>
                      <a href="view.html?id=2" class="text-primary me-2" title="View"><i class="bi bi-eye-fill"></i></a>
                      <a href="registration.html?id=2" class="text-warning me-2" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                      <a href="delete.html?id=2" class="text-danger" title="Delete"><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>EMP1003</td>
                    <td>Linda</td>
                    <td>Park</td>
                    <td>Marketing</td>
                    <td>Manager</td>
                    <td>$85,000</td>
                    <td>2020-11-05</td>
                    <td>
                      <a href="view.html?id=3" class="text-primary me-2" title="View"><i class="bi bi-eye-fill"></i></a>
                      <a href="registration.html?id=3" class="text-warning me-2" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                      <a href="delete.html?id=3" class="text-danger" title="Delete"><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>
                
                </tbody>
            </table>
          </div>
        </div>
    </div>
      
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous":></script>
</body>
</html>
