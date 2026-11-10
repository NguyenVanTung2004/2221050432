<h1>Day la file index.php</h1>
<?php
    // Noi dung duoc dat o day
    echo "Hello World! <br>";
    //Bien: $Ten bien = gia tri;
    $hoTen = "Ngoc Anh";
    
    $tuoi = 29;
    //De noi chuoi trong php dung dau .
    echo $hoTen . " ".$tuoi . "<br>";
    // strlen() do dai chuoi
    echo strlen($hoTen)."<br>";
    //Dem so tu
    echo str_word_count($hoTen)."<br>";
    //Tim kiem ki tu trong chuoi
    echo strpos($hoTen,"o")."<br>";
    //Thay doi ki tu trong chuoi
    echo str_replace("Anh","Do",$hoTen)."<br>";
    $soThuNhat = 10;
    $soThuHai = 5;
    //Phep cong
    echo $soThuNhat + $soThuHai."<br>";
    //Phep tru
    echo $soThuNhat - $soThuHai."<br>";
    //Phep nhan
    echo $soThuNhat * $soThuHai."<br>";
    //Phep chia
    echo $soThuNhat / $soThuHai."<br>";
    //Toan tu gan
    $soThuNhat += $soThuHai;
    echo $soThuNhat."<br>";
    //cau dieu kien
    // if("dieu kien"){
        //logic
    //}
    //elseif("Dieu kien"){
        //logic
    //}
    //else {
        //logic
    //} 
    
    $tong = $soThuNhat + $soThuHai."<br>";
    if($tong < 15) {
        echo "Tong 2 so nho hon 15";
    }
    elseif($tong == 15){
        echo "Tong 2 so bang 15";

    }
    else{
        echo "Tong 2 so lon hon 15";
    }
    //for
    for($i = 0;$i < 100;$i++){
        echo $i."<br>";
    }
    //mang
    echo "<br>";
    $mang = ["Anh","Nhat Anh","Vu Anh"];
    //Dem phan tu
    echo count($mang)."<br>";
    echo $mang[1]."<br>";
    $mang = "Quang Anh";
    print_r($mang);
    //xoa
    echo "<br>";
    unset($mang[3]);
    print_r($mang);     


    
    
    
 ?>