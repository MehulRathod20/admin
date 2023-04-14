$(document).ready(function(){

    // Show Menu 
	function loadTable(){
    $.ajax({
      url:"fetch_categories.php",
      type:"POST",
      success:function(data){
        $("#select").html(data);
      }
    });
}
loadTable();

});