
// mes fonction jquery pour les hide et click de ma page profil

$(function(){
    $("#end").hide();
  $( "#start" ).click(function() {
    $( "#end" ).toggle( "slow" );
    });
  });
  
  $(function(){
    $("#fin").hide();
  $( "#debut" ).click(function() {
    $( "#fin" ).toggle( "slow" );
    });
  });
  

  $(function(){
    $("#bye").hide();
  $( "#now" ).click(function() {
    $( "#bye" ).toggle( "slow" );
    });
  });
  