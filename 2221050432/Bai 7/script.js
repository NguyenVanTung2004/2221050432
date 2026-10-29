var listPhim = [
  {
    id: 0,
    ten: "Cảnh sát trưởng Labrado",
    thoiLuong: 20,
    banner: "./assets/banner.jpg",
    trailer: "https://www.youtube.com/embed/vGvCnjY_4Tc?si=f1wDQeMXsUGVcwdC",
  },
  {
    id: 1,
    ten: "Zootopia",
    thoiLuong: 15,
    banner: "./assets/zootopia.jpg",
    trailer: "https://www.youtube.com/embed/vGvCnjY_4Tc?si=f1wDQeMXsUGVcwdC",
  },
  {
    id: 2,
    ten: "Doraemon Nobita và cuộc đại thủy chiến ở xứ sở người cá",
    thoiLuong: 1,
    banner: "./assets/doraemonnguoica.jpg",
    trailer: "https://www.youtube.com/embed/WR7MSxOhmls?si=1-WeoHZS6Q3d2W26",
  },
  {
    id: 3,
    ten: "Doraemon Nobita và cuộc chiến vũ trụ tí hon",
    thoiLuong: 15,
    banner: "./assets/doraemontihon.jpg",
    trailer: "https://www.youtube.com/embed/dd_R1GQwKlY?si=39rJVGT_zFl6GOSU",
  },
  {
    id: 4,
    ten: "Doraemon Nobita và lâu đài dưới đáy biển",
    thoiLuong: 15,
    banner: "./assets/doraemonlaudau.jpg",
    trailer: "https://www.youtube.com/embed/2Ox6aYmhxvw?si=eNHyKRvFrPp5I92i",
  },
  {
    id: 5,
    ten: "Thám tử lừng danh Conan Ngôi sao năm cánh triệu đô",
    thoiLuong: 15,
    banner: "./assets/ngoisao5canh.jpg",
    trailer: "https://www.youtube.com/embed/5u7zOeiZJPQ?si=1ZVvhOMAXcrgb2UL",
  },
  {
    id: 6,
    ten: "Thám tử lừng danh Conan Mê cung trong thành phố cổ",
    thoiLuong: 15,
    banner: "./assets/mecungthanhphoco.jpg",
    trailer: "https://www.youtube.com/embed/6bpD8lC-6wE?si=lW5h39AaN6Vub3ca",
  },
  {
    id: 7,
    ten: "Thám tử lừng danh Conan Kho báu dưới đáy đại dương",
    thoiLuong: 15,
    banner: "./assets/conankhobau.jpg",
    trailer: "https://www.youtube.com/embed/vGvCnjY_4Tc?si=f1wDQeMXsUGVcwdC",
  },
  {
    id: 8,
    ten: "Thám tử lừng danh Conan Cú đấm Saphire xanh",
    thoiLuong: 15,
    banner: "./assets/conan23.jpg",
    trailer: "https://www.youtube.com/embed/x64c1a0fXa8?si=dQhkLUlg067QYOEv",
  },
  {
    id: 9,
    ten: "Thám tử lừng danh Conan Dư ảnh của độc nhãn",
    thoiLuong: 15,
    banner: "./assets/conan.jpg",
    trailer: "https://www.youtube.com/embed/dz5mN-iIC4g?si=A3qmGCHG1irLU6ez",
  },
  {
    id: 10,
    ten: "Doraemon Nobita và binh đoàn người sắt",
    thoiLuong: 15,
    banner: "./assets/binhdoannguoisat.jpg",
    trailer: "https://www.youtube.com/embed/W1BCfsGt37g?si=dDcMYNxGu5IOtiv5",
  },
  {
    id: 11,
    ten: "Iron Man",
    thoiLuong: 15,
    banner: "./assets/ironman1.jpg",
    trailer: "https://www.youtube.com/embed/KAE5ymVLmZg?si=4zfYe61T1RRIdntC",
  },
  {
    id: 12,
    ten: "Avenger Endgame",
    thoiLuong: 15,
    banner: "./assets/endgame.jpg",
    trailer: "https://www.youtube.com/embed/TcMBFSGVi1c?si=sZjpSSEfqyl6YhQt",
  },
  {
    id: 13,
    ten: "Avenger Doomsday",
    thoiLuong: 15,
    banner: "./assets/doomsday.jpg",
    trailer: "https://www.youtube.com/embed/irVNGjRFZGk?si=3G76TkPCa7xrVAqE",
  },
  {
    id: 14,
    ten: "Terminator",
    thoiLuong: 15,
    banner: "./assets/terminator.jpg",
    trailer: "https://www.youtube.com/embed/nGrW-OR2uDk?si=CLIIMoNWcvepm8e_",
  },
  {
    id: 15,
    ten: "Spiderman Brand New Day",
    thoiLuong: 15,
    banner: "./assets/brandnewday.jpg",
    trailer: "https://www.youtube.com/embed/62bIsvRcPv0?si=LN47Xrt6OytlnHVf",
  },
  {
    id: 16,
    ten: "Fast 5",
    thoiLuong: 15,
    banner: "./assets/fast5.jpg",
    trailer: "https://www.youtube.com/embed/vcn2GOuZCKI?si=0gxhA8bfV5LC5Vf9",
  },
  {
    id: 17,
    ten: "Fast & Furious 8",
    thoiLuong: 15,
    banner: "./assets/fast_furious8.jpg",
    trailer: "https://www.youtube.com/embed/JwMKRevYa_M?si=VDABU2sfe3aQIN11",
  },
  {
    id: 18,
    ten: "Fast & Furious 7",
    thoiLuong: 15,
    banner: "./assets/furious7.jpg",
    trailer: "https://www.youtube.com/embed/yISKeT6sDOg?si=NOGA_OgHKMijZdOK",
  },
  {
    id: 19,
    ten: "Hobb & Shar",
    thoiLuong: 15,
    banner: "./assets/hobb_shaw.jpg",
    trailer: "https://www.youtube.com/embed/9SA7FaKxZVI?si=CXmhgWwybsYdvVhJ",
  },
  {
    id: 20,
    ten: "Sherlock 1",
    thoiLuong: 15,
    banner: "./assets/sherlock1.jpg",
    trailer:
      "https://www.youtube.com/embed/vGvCnxK7S9mrFWL4?si=OhT0uDkdK-11K4BN",
  },
  {
    id: 21,
    ten: "Sherlock 3",
    thoiLuong: 15,
    banner: "./assets/sherlock3.jpg",
    trailer: "https://www.youtube.com/embed/IWq1Aq1YHQs?si=HTXKn1Uru8nV3lqy",
  },
  {
    id: 22,
    ten: "The Transporter",
    thoiLuong: 15,
    banner: "./assets/thetransporter.jpg",
    trailer: "https://www.youtube.com/embed/7FnbLyv2oio?si=IK1I5qM-d9bvn17N",
  },
  {
    id: 23,
    ten: "Sherlock Movie",
    thoiLuong: 15,
    banner: "./assets/thetransporter.jpg",
    trailer: "https://www.youtube.com/embed/7FnbLyv2oio?si=IK1I5qM-d9bvn17N",
  },
  {
    id: 24,
    ten: "Shin",
    thoiLuong: 15,
    banner: "./assets/shin.jpg",
    trailer: "https://www.youtube.com/embed/unbiTMy7WAY?si=n75SFy1jbQjDI9sO",
  },
];

function xemTrailer() {
  // Ẩn banner
  document.getElementsByClassName("banner")[0].style = "display: none";

  // Hiển thị trailer
  document.getElementsByClassName("banner")[1].style = "dispaly: block";
  document.getElementsByClassName("banner")[1].style = "dispaly: block";
}

function doiBanner(id) {
  for (let i = 0; i < listPhim.length; i++) {
    if (listPhim[i].id == id) {
      document.getElementsByClassName("ten")[0].innerHTML = listPhim[i].ten;
      document.getElementsByTagName("video")[0].src =
        listPhim[i].duongDanYoutube;
    }
  }
}
