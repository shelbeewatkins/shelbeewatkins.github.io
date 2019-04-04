var turn = "x";
$('td').on('click', function(){
  var $square = $(this);
  if($square.text() == ""){
    $square.text(turn);
    if(turn == "x"){
      turn = "o";
}else{
      turn = "x"; 
}
  $('#turn').text(turn + "'s turn");
}
});
