<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Login</a>
            </div>
          
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                     
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   

    <!-- Page Content -->
    <div class="container">

      <header>
      <div class="container">
          <form method="GET" action="login_user">
              <div class="form_input">
                  <input type="text" name="username" placeholder="Enter Your Username" />
              </div>
              <div class="form_input">
                  <input type="password" name="password" placeholder="Enter Your Password" />
              </div>
              <div class="form_input">
                  <input type="submit" name="submit" value="LOGIN" class="btn-login" />
              </div>
          </form>
      </div>




           <!-- <h1 class="text-center">Login</h1>
        <div class="col-sm-4 col-sm-offset-5">         
        <form class="" action="login_user.php" method="get" >
                <div class="form-input"><label for="username">
                    username<input type="text" name="rusername" placeholder="enter your username"></label>
                </div>
                <div class="form-input"><label for="password">
                   Password<input type="password" name="rpassword" placeholder="enter your password""></label>
                </div>
                <div class="form-input">
                <button><a  class="btn btn-primary" type="submit">Submit</a></button>
                </div>
            </form>
        </div>  -->


    </header>


        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2030</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
