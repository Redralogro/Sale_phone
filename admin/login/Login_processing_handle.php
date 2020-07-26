<?php 

//include_once 'model/phone_m.php';
include_once __DIR__.'../../model/phone_m.php';
$db = new phone_m();
 
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		//Prevent sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
        $password = addslashes($password);
        $password=md5($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
            $result=$db->getUSER($username,$password);
            
			if (empty($result)) {
				echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác!')</script>";
			}
			else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                foreach ($result as $row)
                {	
                	$_SESSION['user_id']= $row['User_id'];
                    $_SESSION['user']= $row['Name'];
                    $_SESSION['status1']= $row['status'];

                };
                //redirect dashbroad
                // header('Location: ../Admin_control/index.php');
				header('Location: ./index.php');
				
			}
		}
	}
?>