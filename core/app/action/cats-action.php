<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "add"){
    $cat = new CategoryData();
    $cat-> name = $_POST["name"];
    $cat->add();
    header("Location: ./?view=cats&opt=all");    
}

elseif(isset($_GET["opt"]) && $_GET["opt"] == "upd"){
    $cat = new CategoryData();
    $cat-> id = $_POST["id"];
    $cat-> name = $_POST["name"];
    $cat->update();
    header("Location: ./?view=cats&opt=all");    
}

elseif(isset($_GET["opt"]) && $_GET["opt"] == "del"){
    $cat = new CategoryData();
    $cat-> id = $_GET["id"];
    $cat->del();
    header("Location: ./?view=cats&opt=all");    
}

?>