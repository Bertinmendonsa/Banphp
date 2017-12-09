 $(document).ready(function(){
              $('#insert').onclick(function(){
                 var image_name = ('#image').val();
                  if(image_name == ''){
                  alert("please select your image");
                      return false;
                  }
                  else{
                      var extension = ('#image').val().split('.').pop().toLowerCase();
                      if(jQuery.isArray(extension,['jpg','jpeg','png']) == -1){
                          alert("selected file is not an Image");
                          $('#image').val('');
                          return false;
                      }
                      
                  }
              });
          });