<?php 
include_once __DIR__ . '/autoload.php';
$id=intval(getInput('id'));
echo $id;
if(empty($check =$db->get_byID("phones",$id)))
{
    $_SESSION['error']="Không tồn tại bản ghi";
    echo "Không tồn tại";
    $url="../index.php?page=product";
    header("Location:".$url);
};
if($_GET['method']=='delete')
{
    echo "Phương thức xóa";
}
if($_GET['method']=='update')
{
    echo "Phương thức cập nhật";
}
