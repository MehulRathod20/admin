$(document).ready(function(){
    // Show Menu 
	function loadTable(){
        $.ajax({
          url:"show_header_menu.php",
          type:"POST",
          success:function(data){
            $("#table-data").html(data);
          }
        });
    }
    loadTable();
    // end show

  // insert Menu / Add Menu
  $("#submit").on("click",function(e){
         // e.preventDefault();
        var add = $("#add-new-menu").val();
        $.ajax({
          url:"insert_header_menu.php",
          type: "POST",
          data: {menu:add},
          success: function(data){
            if (data == 1) {
              alert("Menu Added");
            }
            else{
                // $("#error-message").html("Can't Add Menu or Sub Menu.").slideDown();
              alert("Can't Add Menu or Sub Menu.");
          }
            }
        });
      });

      // Delete header menu 
      $(document).on("click",".delete-btn", function(){
        var mid = $(this).data("id");
        var element = this;
        $.ajax({
          url:"delete_header_menu.php",
          type:"POST",
          data:{menuid : mid},
          success:function(data){
            if (data == 1) {
              loadTable();
              $(element).closest("tr").fadeOut();
            }
            else{              
            }            
          } 
        });

       });

       // Show Model Box
       $(document).on("click",".edit-btn", function(){

        $("#model").show();

        var uid = $(this).data("id");

        $.ajax({
          url: "update_header_menu.php",
          type:"POST",
          data:{id : uid},
          success:function(data){
            $("#model-form table").html(data);
          }
        });

     });
     // hide model box
     $("#close-btn").on("click", function(){
        $("#model").hide();
     });

     // save update form

     $(document).on("click","#save",function(){

      var mid = $("#edit-id").val();
      var menu = $("#edit-menu").val();
      $.ajax({
        url: "update_header_menu.php",
        type:"POST",
        data:{id : mid, menu : menu},
        success:function(data){
          if(data == 1){
          $("#model").hide();
          loadTable();
          }
        }

      });

     });

});