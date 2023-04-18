$(document).ready(function(){
   
    // Header Menu start
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


    $("#form-add").on("submit", function(e) {
      e.preventDefault();

      var formdata = new FormData(this);
      $("#form-add").trigger("reset");

      $.ajax({

          url: "insert_header_menu.php",
          type: "POST",
          data: formdata,
          contentType: false,
          processData: false,
          success: function(data) {

            loadTable();
          }
      });
     
  });

  // // insert Menu / Add Menu
  // $("#submit").on("click",function(e){
  //        // e.preventDefault();
  //       var add = $("#add-new-menu").val();
  //       $.ajax({
  //         url:"insert_header_menu.php",
  //         type: "POST",
  //         data: {menu:add},
  //         success: function(data){
  //           if (data == 1) {
  //             alert("Menu Added");
  //           }
  //           else{
  //               // $("#error-message").html("Can't Add Menu or Sub Menu.").slideDown();
  //             alert("Can't Add Menu or Sub Menu.");
  //         }
  //           }
  //       });
  //     });

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

        var mid = $(this).data("id");

        $.ajax({
          url: "fetch_data.php",
          type:"POST",
          data:{id : mid},
          success:function(data){
            $("#edit-menu-form").html(data);
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
    //  Header menu  end 


   //slider data show  in table

   function loadslider(){    //loadtable function

    $.ajax({

      url:"show_slider.php",
      type:"POST",
      success:function(data){
        $('#table_data').html(data);
      }
    });
  }
  loadslider();

  //delete slider image 
  
  $(document).on("click",".delete", function(){
    var sid = $(this).data("id");
    var elem = this;
    $.ajax({
      url:"delete_slider.php",
      type:"POST",
      data:{aid : sid},
      success:function(data){
        if (data == 1) {
          loadslider();
          $(elem).closest("tr").fadeOut();
        }
        else{              
        }            
      } 
    });

   });

   

});