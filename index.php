<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
    session_start();
    ob_start(); 
    include "model/pdo.php"; 
    include "model/product.php";
    include "model/category.php";
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    // if(isset($_SESSION['username'])){
    //     header("Location: trangchu.php");
    //     exit();
    // }
    if (isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch($act){
            case "dangnhap":
                if(isset($_POST['submit'])){
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];
                }
                include "trangchu.php";
                break;
                case "dangxuat":
                    session_destroy();
                    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
                    break;
            case "listdm":
                $listcategory = listCategory();
                include "view/category/list.php";
                break;
            case "adddm":
                if(isset($_POST['adddm'])){
                    $name_dm = $_POST['name_dm'];
                    addCategory($name_dm);
                    $thongbao ="Thêm Danh Mục Thành Công";
                }
                $listcategory = listCategory();
                include "view/category/add.php";
                break;
            case "deletedm":
                if(isset($_GET['id_dm'])){
                    deletecategory($_GET['id_dm']);
                }
                $listcategory = listCategory();
                include "view/category/list.php";
                break;
                case "updatedm":
                    $oneCategory = null;
                    if(isset($_GET['id_dm'])){
                        // Gọi hàm để tải danh mục từ ID
                        $oneCategory = loadOneCategory($_GET['id_dm']);
                    }
                    $listcategory = listCategory();
                    include "view/category/update.php";
                    break;
                
            case "updatedanhmuc":
                if(isset($_POST['update'])){
                    $id_dm = $_POST['id_dm'];
                    $name_dm =$_POST['name_dm'];
                    updateCategory($id_dm,$name_dm);
                    $thongbao= "Sửa Sản Phẩm Thành Công";
                }
                $listcategory =listCategory();
                include "view/category/list.php";
                break;    
            case "list":
                $listproduct = showProduct();
            include "view/product/list.php";
                break;
            case "add":
                if (isset($_POST['add'])){
                    $name_sp = $_POST['name_sp'];
                    $price_sp = $_POST['price_sp'];
                    $mota = $_POST['mota'];
                    $id_dm = $_POST['id_dm'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "public/";
                    $target_file = $target_dir. basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                    addProduct($name_sp,$price_sp,$image,$mota,$id_dm);
                    $thongbao= "Thêm Sản Phẩm Thành Công";
                }
                $listcategory = listCategory();
                include "view/product/add.php";
                break;
            case "update":
                if(isset($_GET['id_sp'])){
                    $oneProduct = loadOneProduct($_GET['id_sp']);
                }
                $listcategory = listCategory();
                include "view/product/update.php";
                break;
            case "updatesp":
                if(isset($_POST['update'])){
                    $id_sp = $_POST['id_sp'];
                    $name_sp = $_POST['name_sp'];
                    $price_sp = $_POST['price_sp'];
                    $mota = $_POST['mota'];
                    $id_dm = $_POST['id_dm'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "public/";
                    $target_file = $target_dir. basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                    updateProduct($id_sp,$name_sp,$price_sp,$image,$mota,$id_dm);
                    $thongbao= "Sửa Sản Phẩm Thành Công";
                }
                $listproduct = showProduct();
                $listcategory = listCategory();

                include "view/product/list.php";
                break;    
            case "delete":
                if(isset($_GET['id_sp'])){
                    deleteProduct($_GET['id_sp']);
                }
                $listproduct = showProduct();
                include "view/product/list.php";
                break;
          
        }
    }else{
        include "login.php";
    }
    // session_unset();
    // session_destroy();

    // // Chuyển hướng về trang đăng nhập
    // header("Location: login.php");
    // exit();
       
?> 