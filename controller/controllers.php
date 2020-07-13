<?php 
include_once './model/database.php';

class utility extends Database
{

    private $ult;

		function __construct()
		{
			$this->ult = new Database();
        }
        
        function  bodyItems()
		{
			if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 'home';
            }
            switch ($page) {
                        case 'home':
                            $result = $this->ult->getAllData('phones');
                            $detail=$this->ult->execute('SELECT Phone_id,Promotion_price FROM detail_phones');
                            include_once 'views/home.php';
                            break;
                        case 'shop':
                            if(isset($_POST['Seacrh']))
                            {
                                $keyword = $_POST['Seacrh'];
                                $phone = $this->ult->getdata_where('phones','Name LIKE "%'.$keyword.' %"');
                                $details = $this->ult->getAllData('detail_phones');
                              
                            }
                            include_once 'views/shop.php';
                            break;

                        case 'single-product':
                            if (isset($_GET['id'])) {
                                $id = (int)$_GET['id'];
        
                                $phone = $this->ult->getAllData('phones');
                                $phone1 = $this->ult->getAllData('phones');
                                $row = $this->ult->detail_phone($id);
                                $details = $this->ult->getAllData('detail_phones');
                                $firm=$this->ult->getAllData('firm');
                            }
                            include_once 'views/single-product.php';
                            break;
                        case 'cart':
                            include_once 'views/cart.php';
                            break;
                        case 'checkout':
                            include_once 'views/checkout.php';
                            break;
                        default:
                            header("Location: ./404/index.php");
                            break;
                    }
        }
}

?>