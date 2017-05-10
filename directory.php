<!DOCTYPE html>  
 <html>  
      <head>  
           <title>FTP Client</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script type="text/javascript" src="js/jquery.js"></script> 
            <script src="js/bootstrap.min.js"></script>
            <script src="js/drag_and_drop.js"></script>
           <link rel="stylesheet" href="css/bootstrap.min.css" />  
          <link rel="stylesheet" href="css/bootstrap.css" />
          <link rel="stylesheet" href="css/custom.css" />  
           
           
      </head>  
      <body>  
           <nav class="navbar navbar-default">
 <div class="container">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FTP Server</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="newin.php">Upload</a></li>
      <li><a href="directory.php">View files</a></li>
    </ul>
  </div>
  </div>
</nav>
<div class="container">
  <iframe src="http://localhost/ftp/upload/" width="100%" height="500px" frameborder="0" ></iframe>
</div>
</body>
</html>