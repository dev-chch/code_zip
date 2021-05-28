<?php
echo mb_substr($name, 0, 1,'utf-8' ). str_repeat('*', mb_strlen($name, 'utf-8')-1);

//첫글자 빼고 길이 만큼 가려준다.
