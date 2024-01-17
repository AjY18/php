<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>variables in php</title>
    
  </head>
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary" >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-1">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-1" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
    <h2> More in php variable :</h2>
    <h4>Rule for creating variable in php</h4>
    <ul>
        <li>starts with a $ sign</li>
        <li>can not start with a number</li>
        <li>Must start with a letter or an underscore</li>
        <li>can only contain alphanumeric characters</li>
        <li> variable in php are case senstive.because ex- $Harry, $herry,$heRRy all are deferent   </li>
    </ul>
</div>
<div class="container">
  <h2>Data Type in Php</h2>
  <ol>
    <li>String  eg. "ajay", ""</li>
    <li>integer eg. 2,54,65</li>
    <li>float  eg. 2.5, 654.3</li>
    <li>Boolean  eg. true,false</li>
    <li>Object eg- instances of classes
      <br>
      In object we use class where we store different type of varibale
    </li>
    <li>Array eg.[3,6,7,8],['aj','he']</li>
    <li>NULL  eg. it's mean not asign any value (empty)</li>
 <li> In php we have ' var_dump ' funtion which help we can see 
  our variable is which type of 
 </li>
 <li> example of var_dump :- 
  <br> $name ="ajay"; <br>
 echo var_dump($name);<br><br>output:- <br>
 <?php
 $name ="ajay";
 echo var_dump($name);
 ?></li>
  </ol>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>