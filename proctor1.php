<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proctor form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .content {
          background-image: url('images/background.jpg');
          /* background-size: cover;
          background-repeat: no-repeat;
          height: 100vh;
          overflow: scroll; */


      }

      .container {
          margin-top: 50px;
          background-color: #f1f2f6;
          width: max-content;
          height: max-content;
          box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
          border-radius: 10px;
          animation: box 0.7s;

      }

      @keyframes box {
          from {
              opacity: 0;
              transform: rotateY(10px);
          }

          to {
              opacity: 1;
              transform: rotateY(0);
          }
      }
      .navbar-nav {
            margin-left: auto;
      }

  </style>
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger navbar-fixed-top">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Proctor Form</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://kjsieit.somaiya.edu.in/en">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <form method="POST" action="logout.php">
                <button class="btn btn-light" type="submit">Log out</button>
              </form>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content my-5">

        <div class="container ">
            <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' class="row g-3">
              <div class="row g-4">
                <div class="col">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                        name="Lname" required>
                </div>
                <div class="col">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                        name="Fname" required>
                </div>
                <div class="col">
                    <label for="name">Middle Name</label>
                    <input type="textfield" class="form-control" placeholder="Middle name" aria-label="Middle name"
                        name="Mname">
                </div>
                <div class="col">
                    <label for="name">Mother's name</label>
                    <input type="text" class="form-control" placeholder="Mother's name" aria-label="Mother name"
                        name="Moname">
                </div>

            </div><br>
            
            <div class="input-group">
                <span class="input-group-text">Address</span>
                <textarea class="form-control" aria-label="With textarea" name="Adrs" placeholder="Enter address"></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" name="City" placeholder="Enter city" id="inputCity">
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Pincode</label>
                  <input type="number" class="form-control" name="Pincode" placeholder="Enter pincode" id="inputZip">
                </div>
            </div><br>
            
            

            <div class="row">
              <div class="col-md-4">
                <label for="inputZip" class="form-label">Student's Mobile Number</label>
                <input type="number" class="form-control" name="Smobile" placeholder="Student's number" id="inputZip">
              </div>
              <div class="col-md-4">
                <label for="inputZip" class="form-label">Father's Mobile Number</label>
                <input type="number" class="form-control"name="Fmobile" placeholder="Father's number" id="inputZip">
              </div>
              <div class="col-md-4">
                <label for="inputZip" class="form-label">Mother's Mobile Number</label>
                <input type="number" class="form-control" name="Mmobile" placeholder="Mother's number" id="inputZip">
              </div>
            </div><br>

            <div class="row">
              <div class="col-md-4">
                <label for="name" >Student's Email</label>
                <input type="text" class="form-control" name="Smail" placeholder="Student's email" aria-label="Studentno">
              </div>
              <div class="col-md-4">
                <label for="name" class="form-label">Father's Email</label>
                <input type="text" class="form-control"name="Fmail" placeholder="Father's email" aria-label="Fatherno">
              </div>
              <div class="col-md-4">
                <label for="name" class="form-label">Mother's Email</label>
                <input type="text" class="form-control" name="Mmail" placeholder="Mother's email" aria-label="Motherno">
              </div>
            </div><br>

            <div class="row">
              <div class="col-md-4">
                <label for="inputZip" class="form-label">Admission Category</label>
                <input type="text" class="form-control" name="admicat" id="inputZip">
              </div>
              <div class="col-md-4">
                <label for="inputZip" class="form-label">Admission Type</label>
                <input type="text" class="form-control"name="admitype" id="inputZip">
              </div>
              <div class="col-md-4">
                <label for="inputZip" class="form-label">Blood Group</label>
                <input type="text" class="form-control" name="bgro" id="inputZip">
              </div>
            </div><br>
            
            <div class="input-group">
                <span class="input-group-text">Hobbies</span>
                <textarea class="form-control" aria-label="With textarea" name="Hobbies"></textarea>
              </div><br>
              <div class="input-group">
                <span class="input-group-text">Mention Difficulties (if any)</span>
                <textarea class="form-control" aria-label="With textarea" name="Diff"></textarea>
              </div><br>
              <div class="input-group">
                <span class="input-group-text">Any Suggestion</span>
                <textarea class="form-control" aria-label="With textarea" name="Any"></textarea>
              </div><br>
            
            
            <div class="col-16 mb-3 center">
                <button type="submit" class="btn btn-danger">Save</button>
            </div><br>
          </form>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script>
         function myFunc(){
            window.location.href = "localhost/internshiptask/logout.html";
         }
      </script>
    </body>
</html>

<?php

if (isset($_POST) && $_POST) {
    $conn = mysqli_connect("localhost", "root", "", "interntask", "3309");
    if (!$conn) {
        die("Can't connect to db : " . mysqli_connect_error());
    } else {
        echo "";
    }

    $Lname = $_POST['Lname'];
    $Mname = $_POST['Mname'];
    $Fname = $_POST['Fname'];
    $Moname = $_POST['Moname'];
    $Adrs = $_POST['Adrs'];
    $City = $_POST['City'];
    $Pincode = $_POST['Pincode'];
    $Smobile = $_POST['Smobile'];
    $Fmobile = $_POST['Fmobile'];
    $Mmobile = $_POST['Mmobile'];
    $Smail = $_POST['Smail'];
    $Fmail = $_POST['Fmail'];
    $Mmail = $_POST['Mmail'];
    $admicat = $_POST['admicat'];
    $admitype = $_POST['admitype'];
    $bgro = $_POST['bgro'];
    $Hobbies = $_POST['Hobbies'];
    $Diff = $_POST['Diff'];
    $Any = $_POST['Any'];

    if (empty($Fname)) {
        echo "<script>alert('Please Fill All Fields')
        </script>";
    } else {
        $query = "INSERT INTO project1(Lname , Fname, Mname ,Mothername ,  address ,  City ,  Pincode ,  Studmobno ,  Fatmobno ,  Mothmobno ,  studmail ,  fathermail , mothermail, Admicat, admintype,Bloodgroup,Hobbies, diff, suggestions ) VALUES ('$Lname', '$Fname', '$Mname', '$Moname', '$Adrs', '$City', '$Pincode', '$Smobile', '$Fmobile', '$Mmobile','$Smail','$Fmail','$Mmail', '$admicat','$admitype', '$bgro', '$Hobbies','$Diff', '$Any');";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Query issue." . mysqli_error($conn);
        } else {
            echo "<script>alert('Thanks for filling form!')
        </script>";
        }
    }

}
?>