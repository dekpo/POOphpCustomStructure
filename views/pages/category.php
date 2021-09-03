<div class="row">
<div class="col-4"><a href="?p=categories" class="btn btn-dark w-100">Back</a></div>
<div class="col-8"><h1><?=$category[0]->name?></h1></div>
    <div class="col-12"><p><?=$category[0]->description?></p></div>  
</div>
<div class="row">
<?php foreach ($posts as $post) : ?>
    <div class="col-12 col-sm-6 col-md-4 my-2">
        <div class="card">
    <img src="<?="./images/".$post->img?>" class="card-img-top" alt="<?= $post->title ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $post->title ?> - <?=$post->category?></h5>
                <p class="card-text"><?= $post->excerpt ?></p>
                <p><small><?= $post->date ?></small></p>
                <a href="<?= $post->url ?>" class="btn btn-dark">Read more...</a>
            </div>
        </div>
    </div>
<?php endforeach ?>
</div>