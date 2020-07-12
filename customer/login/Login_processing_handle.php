<?php 

include_once '../model/database.php';
$db = new Database;  
 $sucess;
 
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["submit"])) {
		$username = $_POST["phoneNumber"];
		$password = $_POST["password"];
		// Prevent sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
        $password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{

            $result=$db->getdata_where("customer","Customer_phone = '$username'");
            // foreach ($result as $row)
            // {
            //     echo $row['User_name'];
            // };
            
			if (empty($result)) {
				echo "Số điện thoại không đúng !";
			}else{
				foreach($result as $rs)
				{   $id=$rs["Customer_id"];
					
					 $checkpws=$db->getdata_where("order_phone","Customer_id = '$id' and password = '$password' ");
					if(!empty($checkpws))
					{
						$_SESSION['customer'] = $username;
						foreach ($result as $row)
						{
							$_SESSION['Customer_name']= $row['Customer_name'];
							
									foreach ($checkpws as $chpws)
								{
								if($row['Customer_id']==$chpws['Customer_id'])
									{

										$_SESSION['Order_id']= $chpws['Order_id'];
						
									}
									
								};
						};

						

						
						 header('Location: ./customer.php');
						break;
					}
					// else
					// {
					// 	$_SESSION['fail']="Lỗi đăng nhập";
					// }
					// else
					// {
					// 	var_dump($checkpws);
                    //   //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
					// 	// $_SESSION['customer'] = $username;
					// 	// foreach ($result as $row)
					// 	// {
					// 	// 	$_SESSION['Customer_name']= $row['Customer_name'];
					// 	// };
						
					// 	// header('Location: index.php');
					// }
				}
				
				
			}
		}
	}
?>