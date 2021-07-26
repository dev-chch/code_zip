var uri = 연결할 URL;
var popupName = "팝업 이름";
var options = "팝업 옵션";

var openDialog = function(uri, name, options, close_callback){
  var popUp = window.open(uri, name, options);
  var interval = window.setInterval(function(){
    try{
      if(popUp == null || popUp.closed){
          window.clearInterval(interval);
          close_callback(popUp);
        }
      }
      catch(e){
      }
  }, 1000);
  
  return popUp ;
};

function pop0pen(){
  openDialog(uri, popupName, options, function(win){
    alert('팝업을 종료했습니다.');
    window.location.reload();
  });
}

pop0pen();
}
