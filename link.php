<?php
$qq = $_GET['qq'];
//shang.qq.com/wpa/qunwpa?idkey=4d8e35b454fa0ebc16dbaba02e406fb3a504a7ce85aecad9f18d0246de8a28ed
/*判断文件是否存在*/
if($qq){//判断文件路径需为服务器内文件路径
    header('Location: https://jq.qq.com/?_wv=1027&k=5a8qkG7&qq='.$qq );//存在则跳转
}else{
    header('HTTP/1.1 404 Not Found'); //不存在返回404
}
include '404.php';
?>