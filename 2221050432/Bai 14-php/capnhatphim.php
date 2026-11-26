<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Cập nhật phim</h1>
    <form class="khoi" action="index.php?page_layout=capnhatphim" method="POST">
        <div class="i-text">
            <input type="text" name="tenPhim" id="" placeholder="Tên Phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>
        <div class="i-text">
            <input type="date" name="nam" id="" placeholder="Năm phát hành">
        </div>
        <div class="i-text">
            <input type="number" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="moTa" id="" placeholder="Mô tả">
        </div>
        <button>Lưu</button>
    </form>

    <?php
        if(isset($_POST['tenPhim']) && 
           isset($_POST['quocGia']) && 
           isset($_POST['nam']) && 
           isset($_POST['doTuoi']) &&
           isset($_POST['moTa']))
        {
            $tenPhim = $_POST['tenPhim'];
            $quocGia = $_POST['quocGia'];
            $nam = $_POST['nam'];
            $doTuoi = $_POST['doTuoi'];
            $moTa = $_POST['moTa'];
            if(!empty($tenPhim) && 
                !empty($quocGia) && 
                !empty($nam) && 
                !empty($doTuoi) &&
                !empty($moTa)
                // người dùng điền đủ thông tin
                ){
                $id = $_POST['id'];
                $sql = "UPDATE `phim` SET `ten_phim`='$tenPhim',`quoc_gia`='$quocGia',`nam`='$nam',`do_tuoi`='$doTuoi',`mo_ta`='$moTa' WHERE id='$id'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header('Location: index.php?page_layout=phim');
                } else {
                    echo 'Cập nhật phim thất bại';
                }
                
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
        
    ?>
</body>
</html>