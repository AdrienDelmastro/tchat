<?php

if(strlen($_GET['pseudo']) > 0){
    header('Location: http://adriendelmastro.fr/projets/tchat/tchat.php');
}
else{
    header('Location: index.php');
}