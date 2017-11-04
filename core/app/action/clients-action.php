<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "add"){
    $cat = new ClientData();
    $cat-> code = $_POST["code"];
    $cat-> name = $_POST["name"];
    $cat-> lastname = $_POST["lastname"];
    $cat-> address = $_POST["address"];
    $cat-> email = $_POST["email"];
    $cat-> phone = $_POST["phone"];
    $cat-> credit = $_POST["credit"]="on"?"1":"0";
    $cat-> creditlim = $_POST["creditlim"];
    $cat-> is_active = $_POST["is_active"]="on"?"1":"0";               
    $cat-> password = $_POST["password"];               
    $cat->add();
    header("Location: ./?view=clients&opt=all");    
}

elseif(isset($_GET["opt"]) && $_GET["opt"] == "upd"){
    $cat = new ClientData();
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
    $cat = new ClientData();
    $cat-> id = $_GET["id"];
    $cat->del();
    header("Location: ./?view=products&opt=all");    
}

?>