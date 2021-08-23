<script type='text/javascript'>
  function isItIE() {
    user_agent = navigator.userAgent;
    var is_it_ie = user_agent.indexOf("MSIE ") > -1 || user_agent.indexOf("Trident/") > -1;
    return is_it_ie;
  }
  if (isItIE()){
    console.log('It is Internet Explorer');
    jQuery('<div class="ie-wrap"><div class="message"><h2>보안상 지원되지 않는 브라우저입니다.</h2><h3>이 브라우저는 <strong>2022년 6월 15일 전세계 공식적으로 지원종료</strong> 됩니다.</h3><div class="suggest-browser"></div></div></div>').prependTo('body');
    jQuery('<span class="seq"><img src="/images/edge.png" alt="it is IE">아래의 추천 브라우저를 사용해주세요</span>').insertBefore('.ie-wrap .suggest-browser');
    jQuery('<span><a href=""><img src="/images/edge.png" alt="naver whale">네이버 웨일 바로가기</a></span>').appendTo('.ie-wrap .suggest-browser');
    jQuery('<span><a href=""><img src="/images/edge.png" alt="google chrome">구글 크롬 바로가기</a></span>').appendTo('.ie-wrap .suggest-browser');
    jQuery('<span><a href=""><img src="/images/edge.png" alt="ms edge">마이크로소프트 엣지 바로가기</a></span>').appendTo('.ie-wrap .suggest-browser');
    jQuery('.site-content').remove();
  }
</script>

<style>
  .ie-wrap { position: relative; width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center; background: rgb(230, 230, 230); }
  .ie-wrap .message { position: relative; width: 80%; height: auto; display: flex; flex-direction: column; align-items: center; flex-direction: column; }
  .ie-wrap .message .seq { display: flex; flex-direction: column; text-align: center; font-size: 21px; margin-bottom: 40px; }
  .ie-wrap .message .suggest-browser { display: flex; width: 100%; justify-content: center; padding: 0 0 40px 0;}
  .ie-wrap .message h2 { width: 100%; text-align: center; padding: 0 0 20px 0; font-weight: bold; }
  .ie-wrap .message h3 { width: 100%; text-align: center; margin: 0; }
  .ie-wrap .message .suggest-browser span { width: 20%; height: auto; text-align: center; margin: 0 40px; }
  .ie-wrap .message .suggest-browser span a { display: flex; flex-direction: column; align-items: center; width: 100%; font-size: 21px; }
  .ie-wrap .message .suggest-browser span a img { width: 120px; height: 120px; margin-bottom: 30px; }
</style>
