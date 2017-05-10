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
           <div class="panel panel-default">
        <div class="panel-heading"><strong>FTP Client</strong></div>
        <div class="panel-body">

          
          <h4>Select files from your computer</h4>
          <button type="button" data-toggle="modal" data-target="#uploadModal" class="btn btn-info btn-primary">Upload Images</button>

          <!-- Drop Zone -->
          <h4>Or drag and drop files below</h4>
          <div class="file_drag_area">
            Just drag and drop files here
          </div>
        </div>
      </div>
           </div>  
      </body>  
 </html>  
 <div id="uploadModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Upload Multiple Files</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="upload_form">  
                          <label>Select Multiple Image</label>  
                          <input type="file" name="files[]" id="select_file" multiple />  
                     </form>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 
 
 </script>  