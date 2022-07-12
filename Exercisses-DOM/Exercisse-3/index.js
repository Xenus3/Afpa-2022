$(document).ready(function(){
$('#masquer-paroles').click(function(){
  $('#paroles').hide();
  $('#b').text('Afficher les paroles');
});
});

   
$(document).ready(function(){
  $('#masquer-refrains').click(function(){
  $('.refrain').hide();
  $('#a').text('Afficher les refrains');
  })
}); 

$(document).ready(function(){
  $("#paroles").hover(function(){
    show("#paroles");
  },
  function(){
    hide("#paroles");
  }); 
});