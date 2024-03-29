<div class="col-md-12 col-xl-12 mb-4">
    <div class="mb-3">
        <a href="admin" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Go Back</a>
    </div>
    <!-- Card Image -->
    <div class="card">
        <img class="card-img-top" src="<?= config::baseUploadUrl().$blog['thumbnail']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="h3 card-title"><b><?= $blog['title']; ?></b></h5>
            <h6 class="card-subtitle text-muted text-uppercase mb-3"><?= $blog['category']; ?></h6>
            <div class="card-text">
                <?= $blog['content']; ?>
            </div>
            <hr>
            <span>
                <a href="admin/blog/edit/<?= $blog['id']; ?>"><i class="fa fa-edit"></i></a>
                <a class="text-danger" data-toggle="modal" href="#exampleModal" onclick="$('.blog_id').val('<?= $blog['id']; ?>');"><i class="fa fa-trash"></i></a>
            </span>
        </div>
    </div>
    <!-- End Card Image -->
</div>