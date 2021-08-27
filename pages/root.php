<?php
    if(isset($_GET['quanly'])){
        $check = $_GET['quanly'];
    }else{
        $check = '';
    }
    if($check == 'doanvat'){
        include("../pages/main/doanvat.php");
    }else if($check == 'doandem'){
        include("../pages/main/doandem.php");
    }else if($check == 'douong'){
        include("../pages/main/douong.php");
    }else if($check == 'tintuc'){
        include("../pages/main/tintuc.php");
    }else if($check == 'chitietsanpham'){
        include("../pages/main/chitietsanpham.php");
    }else{
        include("../pages/main/index.php");
    }
?>