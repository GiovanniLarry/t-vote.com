<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FeedBack</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>T-voting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
           
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> 
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">SEND A MESSAGE.</h2>
            <p class="normalFont">Send your feedbacks here.</p>
          </div>
          
          <form action="savefeedback.php" method="POST">
          <div class="form-group">
            <label>Name :</label><br>
            
            <input type="text" name="voterName" pattern="[A-Za-z]{6,}" title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label>Email ID :</label><br>
            <input type="text" name="voterEmail" placeholder="Enter Your Email ID" class="form-control"/><br>

            <label>Message :</label><br>
            <input  type="text" name="message" "placeholder="Enter Your Message" class="form-control" required/><br>
            
            
              
              
              
              <button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button>
              <button type="submit" class="btn btn-default">Decline</button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>