<!--  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"">
			<div class="container">


				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index">College-Notes-Gallery</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    	<li><a href="#about.php">About Us</a></li>
						 <li><a href="login.php">Login</a></li>
						 <li><a href="signup.php">Sign Up</a></li>
                         <li><a href="dashboard/">Upload Notes</a></li>



                    </ul>
				</div>
			</div>
	    </nav> -->

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">NoteFinder</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="notes.php?faculty=BCA">BCA</a></li>
          <li><a href="notes.php?faculty=BSc CSIT">BSc. CSIT</a></li>
          <li><a href="notes.php?faculty=BIM">BIM</a></li>
          <li><a href="notes.php?faculty=BBM">BBM</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>

      <form class="navbar-form navbar-left" method = "GET" action="search_operation.php">
        <div class="form-group">
          <input type="text" class="form-control" name = "search" placeholder="Search" required>
        </div>
          <button type="submit" class="btn btn-default">Search</button>
      </form>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>