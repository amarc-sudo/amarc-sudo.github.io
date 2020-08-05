<?php
include("../model/modelArticle.php");
if(isset($_GET['recherche'])) {
        $articlesRecherche = getPost($_GET['recherche']);
        require('../view/rechercheListe.php');

}

