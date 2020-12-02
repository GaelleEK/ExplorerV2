<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header"><?= $file->getName() ?></div>
    <div class="card-body">
        <h5 class="card-title"><?= $file->getSlug() ?></h5>
        <p class="card-text"><?= $file->getUrl() ?></p>
    </div>
</div>