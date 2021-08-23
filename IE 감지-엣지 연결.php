<?php //php
if (preg_match('/MSIE|Internet Explorer|Trident/i', $_SERVER['HTTP_USER_AGENT'])) {
    echo '<script>window.location="microsoft-edge:https://marshall-ku.com'.$_SERVER['REQUEST_URI'].'";</script>';
}
?>

<script>
  if (window.navigator.userAgent.match(/MSIE|Internet Explorer|Trident/i)) {
    window.location = "microsoft-edge:" + window.location.href;
  }
</script>
