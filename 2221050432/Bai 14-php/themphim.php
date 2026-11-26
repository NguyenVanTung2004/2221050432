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
        select {
            width: 100%;
            margin: 2px 0;
            padding: 5px 0;
        }

    </style>
</head>
<body>
    <h1>Thêm phim</h1>
    <form class="khoi" action="index.php?page_layout=themphim" method="POST" enctype="multipart/form-data">
        <div class="i-text">
            <input type="text" name="tenPhim" id="" placeholder="Tên Phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>
        <?php
            $sqlTheLoai = "select * from the_loai";
            $resultTheLoai = mysqli_query($conn, $sqlTheLoai);

            $sqlDaoDien = "select * from dao_dien";
            $resultDaoDien = mysqli_query($conn, $sqlDaoDien);
        ?>
        <div class="i-text">
            <select name="theLoai" id="">
                <?php
                    while ($row = mysqli_fetch_array($resultTheLoai)) {
                ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['ten_the_loai']?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="i-text">
            <select name="daoDien" id="">
                <?php  
                    while ($row = mysqli_fetch_array($resultDaoDien)) {
                ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['ho_ten'] ?></option>
                <?php 
                    }
                ?>
            </select>
        </div>
        <div class="i-text">
            <input type="date" name="nam" id="" placeholder="Năm phát hành">
        </div>
        <div class="i-text">
            <input type="number" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="trailer" id="" placeholder="Trailer">
        </div>
        <div class="i-text">
            <input type="file" name="poster" id="" placeholder="Chọn tệp">
        </div>
        <div class="i-text">
            <input type="text" name="moTa" id="" placeholder="Mô tả">
        </div>
        <button>Thêm</button>
    </form>

    <?php
        if(isset($_POST['tenPhim']) && 
           isset($_POST['quocGia']) && 
           isset($_POST['theLoai']) && 
           isset($_POST['daoDien']) && 
           isset($_POST['nam']) && 
           isset($_POST['trailer']) &&
           isset($_POST['poster']) &&
           isset($_POST['doTuoi']) &&
           isset($_POST['moTa']))
        {
            $tenPhim = $_POST['tenPhim'];
            $quocGia = $_POST['quocGia'];
            $theLoai = $_POST['theLoai'];
            $daoDien = $_POST['daoDien'];
            $nam = $_POST['nam'];
            $traier = $_POST['trailer'];
            $poster = $_POST['poster'];
            $doTuoi = $_POST['doTuoi'];
            $moTa = $_POST['moTa'];
            if(!empty($tenPhim) && 
                !empty($quocGia) && 
                !empty($nam) && 
                !empty($doTuoi) &&
                !empty($moTa)
                // người dùng điền đủ thông tin
                ){
                
                $sql = "INSERT INTO `phim`(`id`, `ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`, `trailer`, `poster`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header('Location: index.php?page_layout=phim');
                } else {
                    echo 'Thêm phim thất bại';
                }
                
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
        // Thêm sửa, xóa thông tin đạo diễn, hiển thị qua select option
    ?>
</body>
</html>