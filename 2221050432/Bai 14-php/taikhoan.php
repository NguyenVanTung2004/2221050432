
<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        .btn-add {
            padding: 10px;
            background-color: green;
            margin: 10px;
            border-radius: 10px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Tai khoan</h1>

    <div style="margin: 20px 0;">
        <a class="btn-add" href="index.php?page_layout=themtaikhoan">
            Them tai khoan
        </a>
    </div>

    <?php
        $sql = "SELECT * FROM nguoi_dung";
        $result = mysqli_query($conn, $sql);
    ?>

  
<table>
    <tr>
        <th>id</th>
        <th>Ten dang nhap</th>
        <th>Email</th>
        <th>Ho ten</th>
        <th>Ngaysinh</th>
        <th>So dien thoai</th>
        <th>Gioi tinh</th>
        <th>Chuc nang</th>
    </tr>

    <?php
        while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['ten_dang_nhap']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['ho_ten']; ?></td>
        <td><?php echo $row['ngay_sinh']; ?></td>
        <td><?php echo $row['so_dien_thoai']; ?></td>
        <td><?php echo $row['gioi_tinh']; ?></td>

        
        <td>
        <button type="button"
            onclick="window.location.href='index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']; ?>'"
            style="background-color: blue; color: white; padding: 8px; border: none; cursor: pointer;">
            Cập nhật
        </button>

        <button type="button"
            onclick="if(confirm('Ban co chac chan muon xoa tai khoan nay khong?')) window.location.href='index.php?page_layout=xoataikhoan&id=<?php echo $row['id']; ?>'"
            style="background-color: red; color: white; padding: 8px; border: none; cursor: pointer;">
            Xóa
        </button>
        </td>

    </tr>
    <?php
        }
    ?>
</table>

</body>
</html>
