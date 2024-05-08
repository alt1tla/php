<?php require(__DIR__.'/../header.php');?>
<div class="card mt-4" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?=$article->getTitle();?></h5>
        <h6 class="card-text"><?=$article->getAuthorId();?></h6>
        <p class="card-text"><?=$article->getText();?></p>
        <p class="card-text small"><?=$article->getCreatedAt();?></p>
    </div>
</div>
<?php require(__DIR__.'/../footer.php');?>