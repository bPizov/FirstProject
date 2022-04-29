<?php
include '../PHP/connect.php';


$full_name = $name_company = $e_mail = $phone_number = $type_students_id = '';

function full_nameCheck($full_name) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $full_name = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
    return $full_name ;
  } else {

    }
  }
}

function name_companyCheck($name_company) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name_company"])) {
      $name_company = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $name_company ;
    } else {
      
      }
    }
  }

function e_mailCheck($e_mail) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
      $e_mail = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $e_mail ;
    } else {
      
    }
  }
}

function telephoneCheck($phone_number) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["phone_number"])) {
      $phone_number = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $phone_number ;
    } else {
  
      }
    }
  }

function type_students_idCheck($type_students_id){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($type_students_id == '0'){
      return "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
    }
    else {

    }
  }
}



  


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
$full_name = $_POST['full_name'];
$name_company = $_POST['name_company'];
$e_mail = $_POST['e_mail']; 
$phone_number = $_POST ['phone_number'];
$type_students_id = $_POST ['type_students_id'];
$insertData = "INSERT INTO employments_info (full_name, name_company, e_mail, phone_number, type_students_id)
VALUES ('$full_name', '$name_company', '$e_mail', '$phone_number', '$type_students_id')";

  if ($conn->query($insertData) === TRUE){
    header("Location:redirect_page.html");
    echo "Server connected...";
  }
  else {
  }
}

    if ($conn->connect_error) {
      echo "ERROR connecting to server...";
    } else {
      
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

        <!-- Latest compiled and minified Bootstrap 4.4.1 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!-- Latest Font-Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <!-- CSS Style -->
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="bg-warning d-flex flex-column min-vh-100">
        <!-- NAV Bar Section -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-warning py-3 px-lg-5 shadow fixed-top">
            <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item d-block text-center">
                    <a href="../../index.html" class="text-decoration-none text-reset" id="Logo">
                        <img class="w-15" src="../Design/Logo.png" alt="Logo img">
                        <small class="text-uppercase font-weight-bold d-block">Brainster</small>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-inner rounded"></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ulOpen">
                    <li class="nav-item px-0 px-lg-4 py-3 py-lg-0">
                        <a class="hover-links nav-link text-dark font-weight-bold" target="_blank" href="https://brainster.co/marketing/">Академија за маркетинг<span class="sr-only">(current)</span></a>
                        <hr class="bg-warning m-0 d-lg-none p-1 rounded">
                    </li>
                    <li class="nav-item px-0 px-lg-4 py-3 py-lg-0">
                        <a class="hover-links nav-link text-dark font-weight-bold" target="_blank" href="https://brainster.co/full-stack/">Академија за програмирање</a>
                        <hr class="bg-warning m-0 d-lg-none p-1 rounded">
                    </li>
                    <li class="nav-item px-0 px-lg-4 py-3 py-lg-0">
                        <a class="hover-links nav-link text-dark font-weight-bold" target="_blank" href="https://brainster.co/data-science/">Академија за data science</a>
                        <hr class="bg-warning m-0 d-lg-none p-1 rounded">
                    </li>
                    <li class="nav-item px-0 px-lg-4 py-3 py-lg-0">
                        <a class="hover-links nav-link text-dark font-weight-bold" target="_blank" href="https://brainster.co/graphic-design/">Академија за дизајн</a>
                        <hr class="bg-warning m-0 d-lg-none p-1 rounded">
                    </li>
                    <li class="nav-item px-0 px-lg-4">
                    <a class="button" href="../../index.html">
                            <div class="qube">
                                <div class="front rounded">Врати се назад</div>
                                <div class="back rounded">Разгледи проекти</div>
                             </div>
                            <!-- Вработи наш студент -->
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /NAV Bar Section !!! -->
        <!-- Form Section -->
        <div class="container pt-2">
            <div class="col-12 text-center pb-md-5">
                <p class="display-3 font-weight-bold mt-5 pt-5 h1-large">Вработи студент</p>
            </div>
            <form action="" method="POST">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="nameForm">Име и Презиме</label>
                            <input required type="text" class="form-control font-italic" id="nameForm" placeholder="Вашето име и презиме" name="full_name">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="companynameForm">Име на компанија</label>
                            <input required type="text" class="form-control font-italic" id="companynameForm" placeholder="Име на вашата компанија" name="name_company">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="e-mailForm">Контакт имејл</label>
                            <input required type="email" class="form-control font-italic" id="e-mailForm" aria-describedby="emailHelp" placeholder="Контакт имејл на вашата компанија" name="e_mail">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="phoneForm">Контакт телефон</label>
                            <input required type="telephone" class="form-control font-italic" id="phoneForm" placeholder="Контакт телефон на вашата компанија" name="phone_number">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="font-weight-bolder" for="select">Тип на студент</label>
                        <div class="form-group">
                            <div class="custom-select mb-4"> 
                                <select class="form-control form-bd input-lg select" name="type_students_id" id="type_students_id" required> 
                                  <option name="type_students_id" value="0" >Изберете тип на студент</option>
                                  <option name="type_students_id" value="1">Студенти од маркетинг</option>
                                  <option name="type_students_id" value="2">Студенти од програмирање</option>
                                  <option name="type_students_id" value="3">Студенти од data science</option>
                                  <option name="type_students_id" value="4">Студенти од дизајн</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="submit" class="label-hide">label</label>
                            <button name="POST" type="submit" id="submit" class="btn btn-danger btn-block btn-large text-uppercase">Испрати</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Form Section !!! -->
        <!-- Footer -->
        <footer class="mt-auto">
            <div class="container-fluid p-3 bg-dark text-center text-white ">
                <p class="m-0">Изработено од Благојчо Пижов на академијата на Brainster</p>
            </div>
        </footer>
        <!-- /Footer !!! -->
        
        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Latest Compiled Bootstrap 4.4.1 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        <!-- JS -->
        <script src="../JS/form.js"></script>
        <script>
            document.getElementsByClassName('custom-select')[0].style.border = "0px";
            document.getElementsByClassName('custom-select')[0].style.background = "translatent";
            document.getElementsByClassName('custom-select')[0].style.height = "auto";
            document.getElementsByClassName('custom-select')[0].style.display = "block";
            document.getElementsByClassName('custom-select')[0].style.width = "auto";
            document.getElementsByClassName('custom-select')[0].style.padding = "0px";
            document.getElementsByClassName('custom-select')[0].style.background = "none";
        </script> 
    </body>
</html>