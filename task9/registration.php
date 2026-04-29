<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Employee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    <h2 class="mb-4">Register Employee</h2>

    <form>
        <div class="row g-3">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" placeholder="Enter the ID">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <label for="empNumber" class="form-label">Employee Number</label>
                <input type="text" class="form-control" id="empNumber" placeholder="EMP12345">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
            </div>
                        
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department">
                <option selected disabled>Choose...</option>
                <option value="1">HR</option>
                <option value="2">IT</option>
                <option value="3">Finance</option>
                <option value="4">Marketing</option>
                </select>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="position" class="form-label">Position</label>
                <select class="form-select" id="position">
                <option selected disabled>Select position</option>
                <option value="1">Manager</option>
                <option value="2">Engineer</option>
                <option value="3">Analyst</option>
                <option value="4">Intern</option>
                </select>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-4">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="salary" placeholder="e.g., 50000">
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-4">
                <label for="hireDate" class="form-label">Hire Date</label>
                <input type="date" class="form-control" id="hireDate">
            </div>
  
        </div>
      
        <button type="submit" class="btn btn-primary mt-3">Register Employee</button>
    </form>

    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous":></script>
</body>
</html>
