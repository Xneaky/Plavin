<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "add"){
    $cat = new ProductData();
    $cat-> code = $_POST["code"];
    $cat-> name = $_POST["name"];
    $cat-> description = $_POST["description"];
    $cat-> price_in = $_POST["price_in"];
    $cat-> price_out = $_POST["price_out"];
    $cat-> category_id = $_POST["category_id"]!=""?$_POST["category_id"]:"NULL";
    $cat-> unit = $_POST["unit"];
    $cat-> inventary_min = $_POST["inventary_min"];               
    $cat->add();
    header("Location: ./?view=products&opt=all");    
}

elseif(isset($_GET["opt"]) && $_GET["opt"] == "upd"){
    $cat = new ProductData();
    $cat-> id = $_POST["id"];
    $cat-> code = $_POST["code"];
    $cat-> name = $_POST["name"];
    $cat-> description = $_POST["description"];
    $cat-> price_in = $_POST["price_in"];
    $cat-> price_out = $_POST["price_out"];
    $cat-> category_id = $_POST["category_id"]!=""?$_POST["category_id"]:"NULL";
    $cat-> unit = $_POST["unit"];
    $cat-> inventary_min = $_POST["inventary_min"];    
    $cat->update();
    header("Location: ./?view=products&opt=all");    
}

elseif(isset($_GET["opt"]) && $_GET["opt"] == "del"){
    $cat = new ProductData();
    $cat-> id = $_GET["id"];
    $cat->del();
    header("Location: ./?view=products&opt=all");    
}

?>