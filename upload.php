 <?php  
 //upload.php  
 $output = '';  
 if(is_array($_FILES))  
 {  
      foreach($_FILES['files']['name'] as $name => $value)  
      {  
      	   $file_name=$_FILES['files']['name'][$name];
           $file_ext = explode(".", $_FILES['files']['name'][$name]); 
           $allowed_extension = array("txt","pdf", "jpeg", "png", "gif");  
           if(in_array($file_ext[1], $allowed_extension))  
           {  
           		$file_name=str_replace(' ', '_', $file_name);
               // $new_name = rand() . '.'. $file_name[1];  
                $sourcePath = $_FILES["files"]["tmp_name"][$name];  
                $targetPath = "upload/".$file_name;  
                move_uploaded_file($sourcePath, $targetPath);  
           }  
      }  
      
 }  
 ?> 