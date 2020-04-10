<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Notes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styling.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
      <style>
        #container{
            margin-top:120px;   
        }

        #notePad, #allNotes, #done, .delete{
            display: none;   
        }

        .buttons{
            margin-bottom: 20px;  
             
        }

        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: black;
            color:black;
            background-color:whitesmoke;
            border-radius: 5px;
            padding: 10px;
              
        }
        
        .noteheader{
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 0 10px;
            background: linear-gradient(#FFFFFF,#ECEAE7);
        }
          
        .text{
            font-size: 20px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
          
        .timetext{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .notes{
            margin-bottom: 100px;
        }

      </style>
  </head>
  <body>
    <!--Navigation Bar-->  
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
      
          <div class="container-fluid">
            
              <div class="navbar-header">
              <strong>
                  <a class="navbar-brand" style="color:midnightblue ">Online Notes</a>
                  <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  
                  </button>
                  </strong>
              </div>
              <strong>
                  
              <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav">
                    <li><a href="profile.php" style="color:midnightblue ">Profile</a></li>
                    <li><a href="#" style="color:midnightblue ">Help</a></li>
                    <li><a href="#" style="color:midnightblue ">Contact us</a></li>
                      <li class="active" style="color:midnightblue "><a style="color:midnightblue " href="#">My Notes</a></li>
                  </ul>
                
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" style="color:midnightblue ">Logged in as <strong> <?php echo $_SESSION['username'] ?> </strong> </a></li>
                    <li><a href="index.php?logout=1" style="color:midnightblue ">Log out</a></li>
                  </ul>
              
              </div>
              </strong>
          </div>
      
      </nav>
    
<!--Container-->
      <div class="container" id="container">
          <!--Alert Message-->
          <div id="alert" class="alert alert-danger collapse">
              <a class="close" data-dismiss="alert">
                &times;
              </a>
              <p id="alertContent"></p>
          
          </div>
          <div class="row">
              <div class="col-md-offset-3 col-md-6">
                  <div class="buttons">
                      <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>
                      <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>
                      <button id="done" type="button" class="btn btn-info btn-lg pull-right">Done</button>
                      <button id="allNotes" type="button" class="btn btn-info btn-lg">All Notes</button>
                  </div>
                  
                  <div id="notePad">
                      <textarea rows="10"></textarea>
                  </div>
                  
                  <div id="notes" class="notes">
<!--                  Ajax call to a php file-->
                  </div>
              
              </div>
          </div>
      </div>

    <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p style="color:midnightblue "><strong><!---Designed and Developed by Somya Bharti (17BCE2187)----></strong></p>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="mynotes.js"></script>  
  </body>
</html>