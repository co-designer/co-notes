$(document).ready(function(){

	

	//Add Button Click
	$(document).on('click', '#add-btn', function() {
      $('#content').load('/parts/admin-panel/parts/button/add-btn.php');
      $('#edit-btn').removeClass('active');
      $('#edit-profile').removeClass('active');
      $('#delete-btn').removeClass('active');
      $('#add-btn').addClass('active');      
      return false;
    });






    //Edit Button Click
    $(document).on('click', '#edit-btn', function() {
      $('#content').load('/parts/admin-panel/parts/button/edit-btn.php');
      $('#add-btn').removeClass('active');
      $('#edit-profile').removeClass('active');
      $('#delete-btn').removeClass('active');
      $('#edit-btn').addClass('active');
      return false;
    });








    //Delete Button Click
    $(document).on('click', '#delete-btn', function() {
      $('#content').load('/parts/admin-panel/parts/button/delete-btn.php');
      $('#add-btn').removeClass('active');
      $('#edit-profile').removeClass('active');
      $('#edit-btn').removeClass('active');
      $('#delete-btn').addClass('active');
      return false;
    });

    $(document).on('click', '#delete-user-verified', function() {
        $('#content').load('/parts/admin-panel/parts/button/delete-btn/delete-user-verified.php');
      return false;
    });

    $(document).on('click', '#delete-user-unverified', function() {
        $('#content').load('/parts/admin-panel/parts/button/delete-btn/delete-user-unverified.php');
      return false;
    });

    $(document).on('click', '#btnDialog', function () {
        var no=this.value;
        $('#dialog').dialogBox({
            
            width: 400,
            height: 200,
            autoSize: true,
            hasClose: true,
            hasMask: true,
            hasBtn: true,
            confirmValue: 'Yes',
            confirm: function(){
                var id = $('#userid-'+no).val();
                $.ajax({
                type: "POST",
                url: "/parts/admin-panel/parts/button/delete-btn/delete-btn-submit.php",
                data: {id : id}, // serializes the form's elements.
                success: function(data)
                {
                    if(data=="sucess"){
                        $('#content').load('/parts/admin-panel/parts/button/delete-btn/delete-user-verified.php');   
                    }
                } 
              });
            },
            cancelValue: 'Cancel',
            title: 'Delete User',
            content: 'Are you sure ?'
      })
        
        return false;
    });

    $(document).on('click', '#btnDialog-un', function () {
        var no=this.value;
        $('#dialog').dialogBox({
            
            width: 400,
            height: 200,
            autoSize: true,
            hasClose: true,
            hasMask: true,
            hasBtn: true,
            confirmValue: 'Yes',
            confirm: function(){
                var unid = $('#unuserid-'+no).val();
                $.ajax({
                type: "POST",
                url: "/parts/admin-panel/parts/button/delete-btn/delete-btn-submit.php",
                data: {unid : unid}, // serializes the form's elements.
                success: function(data)
                {
                    if(data=="sucess"){
                        $('#content').load('/parts/admin-panel/parts/button/delete-btn/delete-user-unverified.php');   
                    }
                } 
              });
            },
            cancelValue: 'Cancel',
            title: 'Delete User',
            content: 'Are you sure ?'
      })
        
        return false;
    });





    //Edit Profile Button Click
    $(document).on('click', '#edit-profile', function() {
      $('#content').load('/parts/admin-panel/parts/button/edit-profile.php');
      $('#add-btn').removeClass('active');
      $('#edit-btn').removeClass('active');
      $('#delete-btn').removeClass('active');
      $('#edit-profile').addClass('active');
      return false;
    });




});




