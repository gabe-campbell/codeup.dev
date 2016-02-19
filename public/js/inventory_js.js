
$(function (){
   
    var data = $.ajax({
      type: 'GET',
      url: '/data/inventory.json',
      success: function(data) {
        console.log(data);
      }
    });
    
});