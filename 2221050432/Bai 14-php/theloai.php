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
        .chucnang {
            display: flex;
            justify-content: center;
            gap: 5px;
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
    <h1>Thể loại</h1>

    <div style="margin: 20px 0;">
        <a class="btn-add" href="index.php?page_layout=themtheloai">Thêm thể loại</a>
    </div>

    <?php
        $sql = 'select * from the_loai';
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>Thể loại</th>
            <th>Chức năng</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)) {?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_the_loai'] ?></td>
            <td class="chucnang">
                <a class="capnhat" href="index.php?page_layout=capnhattheloai&id=<?php echo $row['id'] ?>">Cập nhật</a>
                <a class="xoa" href="index.php?page_layout=xoatheloai&id=<?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>