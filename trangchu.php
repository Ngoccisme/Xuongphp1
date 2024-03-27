<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        
        .menu {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }
        
        .menu li {
            margin: 0 10px;
        }
        
        .menu li a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .menu li a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    
    <h1>Trang cập nhật sản phẩm đòo Haileng</h1>
    <marquee behavior="scroll" direction="left">Chào mừng bạn đến với web của chúng tôi</marquee>
    <ul class="menu">
        <li><a href="index.php?act=list">Danh Sách Sản Phẩm</a></li>
        <li><a href="index.php?act=listdm">Danh sách Danh Mục</a></li>
        <li><a href="index.php?act=dangxuat">Đăng Xuất</a></li>
    </ul>
</body>
</html>
