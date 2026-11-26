<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        tr, th, td {
            border: 1px solid black;
        }
        .btn-add {
            background-color: green;
            padding: 10px;
            border-radius: 10px;
        }
        .capnhat{
            background-color: red;
        }
        .xoa {
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>Phim</h1>
    <div style="margin: 20px 0;">
        <a class="btn-add" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>
    
    <?php
        $sql = "select * from phim p 
        join dao_dien dd 
        on p.dao_dien_id = dd.id
        join phim_the_loai ptl
        on p.id = ptl.phim_id
        join the_loai tl
        on ptl.the_loai_id = tl.id
        ";
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>Tên phim</th>
            <th>Quốc gia</th>
            <th>Thể loại</th>
            <th>Đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Độ tuổi</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_phim'] ?></td>
            <td><?php echo $row['quoc_gia'] ?></td>
            <td><?php echo $row['ten_the_loai'] ?></td>
            <td><?php echo $row['dao_dien_id'] ?></td>
            <td><?php echo $row['nam'] ?></td>
            <td><?php echo $row['do_tuoi'] ?></td>
            <td><?php echo $row['mo_ta'] ?></td>
            <td>
                <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id'] ?>">Cập nhật</a>
                <a class="xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php
           
            }
        ?>
    </table>

</body>
</html>