<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
      <title>TODO supply a title</title>
      <meta charset="UTF-8">
      <meta name="viewport" 
            content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
         
      <style>
         #divContent1, #divContent2, #divContent3{
            margin:5px auto;
            top:60px;
            width:100%;
            height:100px;
            background-color:#afa;
            border-radius:5px
         }
      </style>

   </head>
   <body>
      <div id="divMain">
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Logo</a>

            <!-- Links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#">Link 1</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Link 2</a>
               </li>

               <!-- Dropdown -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Dropdown link
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" 
                        href="#"
                        data-target="#divContent1"
                        data-toggle="collapse">Link 1</a>
                     <a class="dropdown-item" 
                        href="#"
                        data-target="#divContent2"
                        data-toggle="collapse">Link 2</a>
                     <a class="dropdown-item" 
                        href="#divContent3"
                        data-toggle="collapse">Link 3</a>
                  </div>
               </li>
            </ul>
         </nav>
         
         <div class="container">
            <div id="divContent1"
                  class="collapse">Content1</div>
            <div id="divContent2"
                  class="collapse">Content2</div>
            <div id="divContent3"
                  class="collapse">Content3</div>
         </div>
      </div> <!-- <div id="divMain"> -->
   </body>
</html>