<?php
/**
 * @package Tuantuv5 (tester)
 * @author  Nguyễn Trịnh Tuấn Tú <www.facebok.com/kar13ma09>
 */
interface TuantuConfigInterface {
    public function CommonMethod();
}
class TuantuHeader implements TuantuConfigInterface {
    public $title = "Nguyễn Trịnh Tuấn Tú | Resources V5";
    public $description = "Hi my name is Tuan Tu / A freelance / web developer / vexer";
    public $keywords = "Kar13ma09,web Tuan Tu,Nguyen trinh tuan tu,KAR13MA09,VNPC,VNPC,tuantu home,profile TuanTu";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "TuanTu | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is Tuan Tu.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đâm mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "Facebook" => "https://facebook.com/Kar13ma09"
        "Instagram" => "https://www.youtube.com/@KAR13MA09_vnpc-vn"
        "Tiktok" => "https://www.tiktok.com/Kar13ma09"
        "Telegram" => "https://t.me/Kar13ma09_vn" 
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ha_Noi');}
}


class TuantuLoveDays implements TuantuConfigInterface {
    public $ConfigLove = [
        <img src="https://i.ibb.co/MnGbYYp/447785563-332059613249421-2494227581777528195-n.jpg" alt="Nguyễn Trịnh Tuấn Tú"/>
        "name_male" => "Tuantu"
        "avatar_female" => "./res/v5/img/female.jpeg"
        "name_female" => "Ngoc Tram"
        "time_relashiption" => "25/02/2015"
    ];
    public function CommonMethod() {}
}
class TuantuMusicList implements TuantuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/4bjjfg.mp3",
            "avatar" => "https://i.ibb.co/Pt4ZJJd/that-girl-1545280005.jpg",
            "title" => "That Girl",
            "author" => "Olly Murs"
        ],
        [
            "url" => "https://files.catbox.moe/m8b4hr.mp3",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Thiên Lý Ơi",
            "author" => "Jack ( 5 Triệu )"
        ],
        [
            "url" => "https://files.catbox.moe/yrpft2.mp3",
            "avatar" => "https://i.imgur.com/DAaTklq.png",
            "title" => "Thuỷ Triều",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://i.imgur.com/vp5Vsx5.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://i.ibb.co/MDVY07s/619964de31327dbf8491d14d2c25533f.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://i.ibb.co/6R8V7S7/ed0741228ad36870e13624120474e50a.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://i.ibb.co/VpFyXhS/ab44498b5b432879428719390baf1180-1490064587.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
