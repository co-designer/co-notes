$(document).ready(function(){

	
//Add Courses Button Click
	$(document).on('change', '#category', function() {
      $("#c_name").prop('disabled',false);
      $("#c_name").prop('value','');
      $("#add_course").prop('disabled',true);  
      return false;
    });



//Course Name Check
  $('#c_name').change(function() {
    var c_name = $(this).val();
    var type = $('#category').val();    
    $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-check.php",
              data: {c_name : c_name , type : type}, // serializes the form's elements.
              success: function(data)
              {
                if(data=="sucess")
                {
                  $("#add_course").prop('disabled',false);
                  $("#add_course").attr('required',true);
                  $("#check").empty();
                  $("#check").append('Course Available');
                }
                else{
                  $("#add_course").prop('disabled',true);
                  $("#check").empty();
                  $("#check").append('Course Not Available');
                }
              },      
          });
  });
    

    $(document).on('click', '#add_course', function () {
        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-submit.php",
              data: $('#course_add').serialize(), // serializes the form's elements.
              success: function(data)
              {
                 if(data=="sucess"){
                    Dialog('Course Added Sucessfully.');
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      });




  //Add Subjects Click
    $(document).on('change', '#category_sub', function() {
        var category_name = $(this).val();
        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-check.php",
              data: {category_name : category_name}, // serializes the form's elements.
              success: function(data)
              {
                $('#sub_name').val('');
                if(data=="wrong")
                {
                  $("#sub_name").prop('disabled',true);
                  $("#add_subject").prop('disabled',true);
                  $('#course_name').prop('disabled',true);
                  $("#check").empty();
                  $("#check").append('Something Wrong');
                }
                else{
                  var codes = jQuery.parseJSON(data);
                  $('#sub_name').prop('disabled',true);
                  $('#course_name').prop('disabled',false);
                  $('#course_name').empty();
                  $('#course_name').append($('<option selected disabled>Course</option>'));
                  $.each(codes, function (index, obj) {
                      $('#course_name').append($('<option value="'+ obj.c_name + '">' + obj.c_name + '</option>'));
                  });
                  $('#course_name').selectpicker('refresh');
                }
              },      
          });
        
        $("#add_subject").prop('disabled',true);  
        return false;
      });

      $(document).on('change', '#course_name', function() {
        $('#sub_name').val('');
        $('#sub_name').prop('disabled',false);  
        return false;
      });

      $('#sub_name').change(function() {     
          $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-check.php",
              data: $("#course_add_sub").serialize(), // serializes the form's elements.
              success: function(data)
              {
                if(data=="sucess")
                {
                  $("#add_subject").prop('disabled',false);
                  $("#check").empty()
                }
                else{
                  $("#add_subject").prop('disabled',true);
                  $("#check").empty();
                  $("#check").append('Subject Already Added!');
                }
              },      
          });
      });

      $(document).on('click', '#add_subject', function () {
        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-submit.php",
              data: $('#course_add_sub').serialize(), // serializes the form's elements.
              success: function(data)
              {
                 if(data=="sucess"){
                    Dialog('Subject Added Sucessfully.');
                    setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 1000);
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      }); 

    //Add Chapters Click
    $(document).on('change','#category_name_chapter', function() {
        var category_name = $(this).val();
        $("#check").empty();
        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-check.php",
              data: {category_name : category_name}, // serializes the form's elements.
              success: function(data)
              {
                $('#chapter_name').val('');
                if(data=="wrong")
                {
                  $("#subject_name").prop('disabled',true);
                  $("#add_chapter").prop('disabled',true);
                  $("#check").empty();
                  $("#check").append('Something Wrong');
                }
                else{
                  var codes = jQuery.parseJSON(data);
                  $('#subject_name').prop('disabled',true);
                  $('#course_name_chapter').prop('disabled',false);
                  $('#course_name_chapter').empty();
                  $('#course_name_chapter').append($('<option selected disabled>Course</option>'));
                  $.each(codes, function (index, obj) {
                      $('#course_name_chapter').append($('<option value="'+ obj.c_name + '">' + obj.c_name + '</option>'));
                  });
                  $('#course_name_chapter').selectpicker('refresh');
                }
              },      
          });
        
        $("#add_subject").prop('disabled',true);  
        return false;
      });

      $(document).on('change', '#course_name_chapter', function() {
        var category_name_chapter = $('#category_name_chapter').val();
        var course_name_chapter =$(this).val();
        $("#check").empty();
        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-check.php",
              data: {category_name_chapter : category_name_chapter , course_name_chapter : course_name_chapter}, // serializes the form's elements.
              success: function(data)
              {
                $('#chapter_name').val('');
                if(data=="wrong")
                {
                  $("#subject_name_chapter").prop('disabled',true);
                  $("#add_chapter").prop('disabled',true);
                  $("#check").empty();
                  $("#check").append('Something Wrong');
                }
                else{
                  var codes = jQuery.parseJSON(data);
                  $("#chapter_name").val();
                  $('#chapter_name').prop('disabled',true);
                  $("#subject_name_chapter").empty();
                  $("#subject_name_chapter").prop('disabled',false);
                  $('#subject_name_chapter').append($('<option selected disabled>Subjects</option>'));
                  $.each(codes, function (index,obj) {
                      $('#subject_name_chapter').append($('<option value="'+ obj + '">' + obj + '</option>'));
                  });
                  $('#subject_name_chapter').selectpicker('refresh');
                }
              },      
          });
        
        $("#add_chapter").prop('disabled',true);  
        return false;
      });

      $(document).on('change', '#subject_name_chapter', function() {
        $("#check").empty();
        $("#chapter_name").val('');
        $("#chapter_name").prop('disabled',false);
      });


      $('#chapter_name').keyup(function() {     
          $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-check.php",
              data: $("#course_add_chapter").serialize(), // serializes the form's elements.
              success: function(data)
              {
                if(data=='add')
                {
                    $("#check").empty();
                     $('#val').empty();
                    $('#val').append('<input type="hidden" name="operation" id="operation" value="add"/>');
                    $('#add_chapter').prop('disabled',false);
                }
                else if(data=='already added')
                {
                    $('#add_chapter').prop('disabled',true);
                    $("#check").empty();
                    $("#check").append('Chapter Already Added.');
                }
                else if(data=='not exist')
                {
                    $("#check").empty();
                    $('#val').empty();
                    $('#val').append('<input type="hidden" name="operation" id="operation" value="not_exist"/>');
                    $('#add_chapter').prop('disabled',false);
                }
                else
                {
                    $("#check").empty();
                    $('#add_chapter').prop('disabled',true);
                }
              },      
          });
      });

      $(document).on('click', '#add_chapter', function () {
        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/add-btn-submit.php",
              data: $('#course_add_chapter').serialize(), // serializes the form's elements.
              success: function(data)
              {
                 if(data=="sucess"){
                    Dialog('Chapter Added Sucessfully.');
                    setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 1000);
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      });


      //Add School Materials
    $(document).on('change', '#type', function () {
      var type = $(this).val();
      var course = $('#course_name_chapter').val();
      var subject = $('#subject_name_chapter').val();
      if(course==null || subject==null)
      {
        Dialog('First Select Course And Subject');
      }
      else
      {
        if(type=='Ncert Solutions'){
          $('#chapters').empty();
          $('#chapters-div').show();
          $.ajax({
                type: "POST",
               url: "/parts/admin-panel/parts/button/add-btn/upload-php/add-school-upload-check.php",
               data: {type : type , course : course , subject : subject}, // serializes the form's elements.
                success: function(data)
                {
                   if(data=="wrong"){
                      Dialog('First Add Chapters.');
                      setTimeout(function(){// wait for 5 secs(2)
                      location.reload(); // then reload the page.(3)
                    }, 1000);
                  }
                  else{
                      var codes = jQuery.parseJSON(data);
                      $("#chapters").empty();
                      $('#chapters').append($('<option selected disabled>Chapters</option>'));
                      $.each(codes, function (index,obj) {
                          $('#chapters').append($('<option value="'+ obj + '">' + obj + '</option>'));
                      });
                      $('#chapters').selectpicker('refresh');
                          
                      }              
                    }              
        
              });
          }
          else
          {
              $('#chapters').empty();
              $('#chapters-div').hide();
          }
          $('#chapters').selectpicker('refresh');
        }
        return false;
     });


    $(document).on('click', '#add_school_material', function () {

        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/upload-php/school-upload.php",
              enctype: 'multipart/form-data',
              data: $('#add_material_school').serialize(), // serializes the form's elements.
              success: function(data)
              {
                 if(data=="sucess"){
                    Dialog('Uploaded Sucessfully.');
                    setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 1000);
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      });

    //Add College Materials

    $(document).on('click', '#add_college_material', function () {

        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/upload-php/college-upload.php",
              enctype: 'multipart/form-data',
              data: $('#add_material_college').serialize(), // serializes the form's elements.
              success: function(data)
              {
                 if(data=="sucess"){
                    Dialog('Uploaded Sucessfully.');
                    setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 1000);
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      });

    //Add Posts

    $(document).on('click', '#add_post', function () {

        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/upload-php/add-post-upload.php",
              enctype: 'multipart/form-data',
              data: $('#add_posts').serialize(), // serializes the form's elements.
              success: function(data)
              {
                 if(data=="sucess"){
                    Dialog('Uploaded Sucessfully.');
                    setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 1000);
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      });


    //Add Results

    $(document).on('click', '#add_result', function () {

        $.ajax({
              type: "POST",
              url: "/parts/admin-panel/parts/button/add-btn/upload-php/result-upload.php",
              data: $('#add_results').serialize(), // serializes the form's elements.
              success: function(data)
              {
                alert(data);
                 if(data=="sucess"){
                    Dialog('Uploaded Sucessfully.');
                    setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 1000);
                }
                else{
                  Dialog('Something Wrong.');      
                }              
              }            
        
          });
        return false;
      });
























































































    function Dialog(content){
                  var cont = content;
                  $('#dialog').dialogBox({
            
                        width: 400,
                        height: 200,
                        autoSize: true,
                        hasClose: true,
                        hasMask: true,
                        hasBtn: false,
                        title: 'Dialog Box',
                        content: cont
                  })
                

      }



});




