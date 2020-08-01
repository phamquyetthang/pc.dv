
<?php
    include "./View/header.php";
    if (isset($_GET['page'])) {
        $controller = $_GET['page'];
    }else{
        $controller = '';
    }
    switch ($controller) {
        case 'lien-he':
            require_once("./View/Lienhe.php");
            break;
        case 'home':
            require_once("./View/home.php");
            break;
        default:
            require_once("./View/home.php");
            break;
    }
    include "./View/footer.php";
?>