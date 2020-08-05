<html>

<div class="container">

    <?php include("menu.php"); ?>

    <div class="row">
        <div class="col-lg-6 offset-3">
            <div class="list-group">
                <?php while($a = $articlesRecherche->fetch()) {?>
                    <a href="article.php?id=<?=$a['id_article']?>" class="list-group-item list-group-item-action align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= htmlspecialchars($a['title']) ?></h5>
                            <small><?= $a['date_message']?></small>
                        </div>
                        <p class="mb-1"><?=substr($a['content'], 0, 45) ?></p>
                    </a>
                <?php }?>
            </div>
        </div>
    </div>
</div>

</html>