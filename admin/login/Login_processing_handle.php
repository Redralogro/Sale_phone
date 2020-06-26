<?php 

include_once __DIR__.'../../../libraries/Database.php';
include_once  __DIR__.'../../../libraries/Function.php';
$db = new Database;  
$result;  
 
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		// Prevent sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
        $password = addslashes($password);
        $password=md5($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
            $result=$db->getdata_where("user","Email = '$username' and password = '$password' ");
            // foreach ($result as $row)
            // {
            //     echo $row['User_name'];
            // };
            
			if (empty($result)) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                foreach ($result as $row)
                {
                    $_SESSION['user']= $row['User_name'];
                };
                
                //redirect dashbroad
                // header('Location: ../Admin_control/index.php');
                header('Location: ./Admin_control/index.php');
			}
		}
	}
?>