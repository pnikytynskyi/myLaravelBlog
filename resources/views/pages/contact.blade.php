<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pavel's Laravel blog - Contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/app.css') }}">
    <script type="text/javascript" src="{{ URL::asset('public/js/app.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li class="active"><a href="/contact">Contact<span class="sr-only">(current)</span></a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- end-navigation -->  
      
    <!-- main-content -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <h1>Contact Me</h1>
            <div class="form-area">  
              <form role="form">
                <br style="clear:both">
                  <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                  </div>
                    
                  <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
              </form>
            </div>
        </div>
      </div><!-- end row -->
    </div>
    <!-- end-main-content -->
    
    <!-- footer -->
    <footer>
      <div class="footer" id="footer">
          <div class="container">
              <div class="row">
                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                      <h3> Quick Links </h3>
                      <ul>
                          <li> <a href="#"> Popular Post </a> </li>
                          <li> <a href="#"> Latest Posts </a> </li>
                          <li> <a href="#"> About Me </a> </li>
                          <li> <a href="#"> Contact Me </a> </li>
                      </ul>
                  </div>
              </div>
              <!--/.row--> 
          </div>
          <!--/.container--> 
      </div>
      <!--/.footer-->
      
      <div class="footer-bottom">
          <div class="container">
              <p class="pull-left"> Copyright ©Laravel 2017. All right reserved. </p>
          </div>
      </div>
      <!--/.footer-bottom--> 
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>