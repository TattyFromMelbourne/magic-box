/* Quick Escape
- reminiscent of the 'Hide Page' button on http://www.vic.gov.au/familyviolence/recommendations.html */
$('.btn-danger').on('click',function(e){window.location.href='https://www.google.com.au/';});

/* Toggle service panels to show all letters */
$('.show-more').on('click',function(e){
  current_text = $(this).text();
  if (current_text == "Show More") {
    $(this).parent().find(".row").show();
    $(this).parent().find(".row").first().css("padding-bottom","0");
    current_text = "Show Less";
  } else {
    $(this).parent().find(".row").hide();
    $(this).parent().find(".row").first().show();
    $(this).parent().find(".row").first().css("padding","30px 0px");
    current_text = "Show More";
  }
  $(this).text(current_text);
});

// Trigger first click to collapse all service panels
$( ".show-more" ).trigger( "click" );

// Ripple Download and Print button events to the iframe

$('#rippleZoomIn').on('click',function(e){
    $('#letterIframe').contents().find('#zoomIn').trigger( "click" );
});

$('#rippleZoomOut').on('click',function(e){
    $('#letterIframe').contents().find('#zoomOut').trigger( "click" );
});

$('#rippleDownload').on('click',function(e){
    $('#letterIframe').contents().find('#download').trigger( "click" );
});

$('#ripplePrint').on('click',function(e){
    $('#letterIframe').contents().find('#print').trigger( "click" );
});

// Add some extra functionality to navbar
$('.navbar-toggle').click(function(){
    documentHeight = $(document).height();
    $( '#transparent-overlay').css("height",documentHeight);
    $( '#transparent-overlay').toggle();
    if ($( '#transparent-overlay' ).is(":visible")) {
      $( '.navbar-inverse').css("box-shadow","0px 10px 25px 5px rgba(0,0,0,0.65)");
      $( '.navbar-inverse').css("-webkit-box-shadow","0px 10px 25px 5px rgba(0,0,0,0.65)");
      $( '.navbar-inverse').css("-moz-box-shadow","0px 10px 25px 5px rgba(0,0,0,0.65)");
    } else {
      $( '.navbar-inverse').css("box-shadow","none");
      $( '.navbar-inverse').css("-webkit-box-shadow","none");
      $( '.navbar-inverse').css("-moz-box-shadow","none");
    }
});
