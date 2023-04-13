$(document).ready(function(){
// Header Info  start

     // Show header info 
      function loadData(){
        $.ajax({
          url:"show_header_info.php",
          type:"POST",
          success:function(data){
            $("#table-data").html(data);
          }
        });
    }
    loadData();
    // end show

    // insert header information
    $("#header-info-btn").on("click",function(e){
      // e.preventDefault();
     var num = $("#add-header-num").val();
     var txt = $("#add-header-text").val();
     $.ajax({
       url:"insert_Header_info.php",
       type: "POST",
       data: {number : num , text : txt},
       success: function(data){
         if (data == 1) {
           alert("Header Info Added.");
         }
         else{
             // $("#error-message").html("Can't Add Menu or Sub Menu.").slideDown();
           alert("Can't Add Header Info.");
       }
         }
     });
   });

    // Delete header menu 
    $(document).on("click",".delete-btn", function(){
      var hid = $(this).data("id");
      var element = this;
      $.ajax({
        url:"delete_header_info.php",
        type:"POST",
        data:{id : hid},
        success:function(data){
          if (data == 1) {
            loadData();
            $(element).closest("tr").fadeOut();
          }
          else{              
          }            
        } 
      });

     });

     $(document).on("click",".edit-btn",function(){
      $("#model").show();
        var hid = $(this).data("id");
      $.ajax({
        url: "fetch_header_info_data.php",
        type:"POST",
        data:{id : hid},
        success:function(data){
          $("#edit-form").html(data);
        }
      });
        
     });

       // hide model box
       $("#close-btn").on("click", function(){
        $("#model").hide();
     });

    // save update form 

     $(document).on("click","#save",function(){
    
      var id = $("#edit-id").val();
      var mob = $("#edit-hphone").val();
      var txt = $("#edit-htxt").val();
      $.ajax({
        url: "update_header_info.php",
        type:"POST",
        data:{hid:id, num:mob, text : txt},
        success:function(data){
          if(data == 1){
          $("#model").hide();
          loadData();
          }
        }

      });

     });
});