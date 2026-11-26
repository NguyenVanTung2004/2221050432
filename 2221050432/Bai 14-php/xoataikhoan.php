<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM `nguoi_dung` WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header('Location: index.php?page_layout=taikhoan');
?>

<!-- Về nhà: thêm sửa xóa thông tin danh mục, thông tin -->