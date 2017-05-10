$(document).ready(function(){  
      $('.file_drag_area').on('dragover', function(){  
           $(this).addClass('file_drag_over');
           return false;  
      });  
      $('.file_drag_area').on('dragleave', function(){  
           $(this).removeClass('file_drag_over');  
           return false;  
      });   

      $('.file_drag_area').on('drop', function(e){  
            alert("Your Files has been uploaded successfully");
           e.preventDefault();  
           $(this).removeClass('file_drag_over');  
           var formData = new FormData();  
           var files_list = e.originalEvent.dataTransfer.files;  
           for(var i=0; i<files_list.length; i++)  
           {  
                formData.append('files[]', files_list[i]);  
           }  
           //console.log(formData);  
           $.ajax({  
                url:"upload.php",  
                method:"POST",  
                data:formData,  
                contentType:false,  
                cache: false,  
                processData: false,  
                success:function(data){  
                     $('#uploaded_file').html(data);  
                }  
           })  
      });  

      $('#select_file').change(function(){3  
           $('#upload_form').submit();  
      }); 

      $('#upload_form').on('submit', function(e){  
           e.preventDefault(); 
           alert("Your Files has been uploaded successfully");
           $.ajax({  
                url :"upload.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#select_file').val('');  
                     $('#uploadModal').modal('hide');  
                    
                }  
           }) 
      });  
 }); 
