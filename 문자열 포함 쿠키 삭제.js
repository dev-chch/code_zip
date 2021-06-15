var cookielist = document.cookie.split(";");
for(var i = 0; i < cookielist.length; i++){
  var cookie = cookielist[i].trim();
  var cookieName = cookie.split("=")[0];

  if(cookieName.indexOf("쿠키 이름") === 0) {
    document.cookie = cookieName + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
}

// 특정 쿠키 리스트들만 삭제할 때 유용한 코드
