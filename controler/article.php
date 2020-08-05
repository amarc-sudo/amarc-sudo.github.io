<?php

require('../model/modelArticle.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getPostUnique($_GET['id']);
    require('../view/ArticleView.php');


} else {
    require('../view/error.php');
}

