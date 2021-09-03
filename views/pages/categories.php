<div class="row">
<div class="col-12">
    <h1>Categories</h1>
</div>
<?php foreach ($categories as $categorie) : ?>
    <div class="col-12 col-sm-6 my-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $categorie->name ?></h5>
                <p class="card-text"><?= $categorie->description ?></p>
                <p><small><?= $categorie->date ?></small></p>
                <a href="<?= $categorie->url ?>" class="btn btn-dark">View <?= $categorie->name ?></a>
            </div>
        </div>
    </div>
<?php endforeach ?>
</div>
