<?php 

$id=intval(getInput('id'));
if(empty($check =$db->get_byID("phones",$id)))
{
    $_SESSION['error']="Không tồn tại bản ghi";
    echo "Không tồn tại";
    $url="https://stackoverflow.com/questions/555282/how-do-i-get-phpmyadmin-to-connect-to-a-local-mysql-servers";
    header("Location:".$url);
};

?>