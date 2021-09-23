<?php
// XSS対策
function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}




?>