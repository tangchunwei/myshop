<?php
function view($file,$data=[]){
    // 压缩数组
    extract($data);
    include(ROOT."views/".$file.".html");
}