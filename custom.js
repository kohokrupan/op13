$(document).ready(function(){
 $('#js-create-user').click(function(e){
  $('#js-diolog-content').dialog({
      modal:true,
      open:function(){
       $('#js-new-user-sudmit').click(function(e){
        var userume=$('#js-new-username').val();
        alert(usename);
       });
      },
      close: function(event,ui){
       $('#js-create-user').html("closeし　　た　　ね");
}   
      });
     });
    });	
   
