<?php
    include "header.php";
    if(isset($_GET["home"])){
        include "home.php";
    }
    elseif (isset($_GET["about"])) {
        include "about.php";
    }
    elseif (isset($_GET["article"])) {
        include "article.php";
    }
    elseif (isset($_GET["contact"])) {
        include "contact.php";
    }
    else{
        include "home.php";
    }
    include "footer.php";
?>