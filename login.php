<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style/login.css">
    <title>Đăng nhập</title>
    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container">
            <form action="index.php?act=dangnhap" method="POST" enctype="multipart/form-data">
                <h1>ĐĂNG NHẬP</h1>
                <?php if(isset($error)){ ?>
                    <p class="error-message"><?php echo $error; ?></p>
                <?php } ?>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng mật khẩu email của bạn</span>
                <input type="email" name="username" placeholder="Tên đăng nhập" id="username" required>
                <span id="nameError" class="error-message"></span>
                <input type="password" name="password" placeholder="Mật khẩu" id="password" required> 
                <span id="passwordError" class="error-message"></span>
                <a href="#">Quên Mật Khẩu?</a>
                <button type="submit" value="Đăng nhập" name="submit" class="btn btn-primary btn-large btn-block">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>
