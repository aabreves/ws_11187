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
            <ul class="nav nav-item navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#divContent1" data-toggle="tab">Forms</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#divContent2" data-toggle="tab">Carousel</a>
               </li>

               <!-- Dropdown -->
               <li class="nav nav-item dropdown">
                  <a class="nav-link dropdown-toggle" 
                     href="#" 
                     id="navbardrop" 
                     data-toggle="dropdown">
                     Dropdown link
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" 
                        href="#"
                        data-target="#divContent3"
                        data-toggle="tab">Accordion</a>
                     <a class="dropdown-item" 
                        href="#"
                        data-target="#divContent4"
                        data-toggle="tab">Modal</a>
                     <a class="dropdown-item"  
                        href="#"
                        data-target="#divContent5"
                        data-toggle="tab">teste 5</a>
                  </div>
               </li>
            </ul>
         </nav>
         
         <div class="container tab-content">
            <div id="divContent1"
                  class="tab-pane fade in active">
               <?php
               require_once 'form_bootstrap4.php';
               ?>
            </div>
            <div id="divContent2"
                  class="tab-pane fade">
               <?php
               require_once 'carousel_bootstrap4.php';
               ?>
            </div>
            <div id="divContent3"
                  class="tab-pane fade">
               <?php
               require_once 'accordion_bootstrap4.html';
               ?>
            </div>
            <div id="divContent4"
                  class="tab-pane fade">
               <h4>MODAL DIALOG</h4>
               <?php
               require_once 'modal_bootstrap4.html';
               ?>
            </div>
            <div id="divContent5"
                  class="tab-pane fade">
               <h4><a href="https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_scrollspy&stacked=h">VEJAM ESTE EXEMPLO</a></h4>
               <?php
               //require_once 'accordion_bootstrap4.html';
               ?>
            </div>
         </div>
      </div> <!-- <div id="divMain"> -->
   </body>
</html>
