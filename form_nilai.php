<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Score</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CACODE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form_nilai.php">Nilai Student</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container">
    <form method="GET" action="form_nilai.php">
    
        <div class="form-group">
            <label for="exampleInputEmail1">Nim</label>
            <input type="text" class="form-control" name="nim" id="exampleInputEmail1" style="size: 20px;" aria-describedby="emailHelp" placeholder="Enter Your NIM">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Course</label>
            <select class="form-control" id="exampleFormControlSelect1" name="course">
                <option value="DDP">Programming Basics</option>
                <option value="BDI">Database I</option>
                <option value="WEB1">Web Programming</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">UTS Score</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="uts_score" aria-describedby="emailHelp" placeholder="Enter The UTS Score">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">UAS Score</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="uas_score" aria-describedby="emailHelp" placeholder="Enter The UAS Score">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Praktikum Score</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="assigment_score" aria-describedby="emailHelp" placeholder="Enter The Praktikum Score">
        </div>
        <button type="submit" name="process" value="save" class="btn btn-primary">Submit</button>
    </form>

    <?php

        $process         = $_GET['process'];
        $nim             = $_GET['nim'];
        $course          = $_GET['course'];
        $uts_score       = $_GET['uts_score'];
        $uas_score       = $_GET['uas_score'];
        $assigment_score = $_GET['assigment_score'];

        require_once('array_siswa.php');
    ?>
    </div>
</body>


</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>