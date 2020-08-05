<?php
include("../model/modelArticle.php");

    $articlesRecherche = getPosts();
    require('../view/rechercheListe.php');
?>
