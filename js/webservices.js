function getMap
{
  $.post("webservices.php?function=getMap", null, getMapResponse);
}

function getMapResponse(data)
{
  map = eval('(' + data + ')');
    
  alert('');
}
