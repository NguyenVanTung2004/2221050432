<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            display: flex;
            gap: 10px;
            background-color: blue;
            padding: 10px;
        }
        a {
            text-decoration: none;
            color: white;

        }
        
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["dangnhap"])){
        header("Location: dangnhap.php");
    }
    ?>
    <header>
    <nav>
        <ul>
            <li><a href="index.php?page_layout=trangchu">Trang chu</a></li>
            <li><a href="index.php?page_layout=taikhoan">Tai khoan</a></li>
            <li><a href="index.php?page_layout=danhmuc">Danh muc</a></li>
            <li><a href="index.php?page_layout=phim">Phim</a></li>
        </ul>
    </nav>
    </header>

    <?php
        if(isset($_GET['page_layout'])) {
            $page = $_GET['page_layout'];
            switch($page) {
                case 'trangchu' :
                    include 'trangchu.php';
                    break;
                case 'taikhoan' :
                    include 'taikhoan.php';
                    break;
                case 'danhmuc' :
                    include 'danhmuc.php';
                    break;
                case 'phim' :
                    include 'phim.php';
                    break;  
                case 'themtaikhoan' :
                    include 'themtaikhoan.php';
                    break;    
            }
        }
    ?>
</body>
</html>