<?php

function getPosts(){
    $db = dbConnect();
    $req = $db->query('SELECT id_article, title, content, DATE_FORMAT(date_message, \'%d/%m/%Y\') AS date_message FROM liste ORDER BY date_message DESC LIMIT 0, 5');
    return $req;
}

function getPost($postTitle){
    $db = dbConnect();
    $req = $db->query("SELECT * FROM liste where title LIKE '%$postTitle%'");
    return $req;
}
function getPostUnique($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id_article, title, content, DATE_FORMAT(date_message, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM liste WHERE id_article = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}


function dbConnect()
{
    try {
        //$db = new PDO('mysql:host=mysql-gravity.alwaysdata.net;dbname=gravity_db;charset=utf8', 'gravity', '010818Ma');
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

