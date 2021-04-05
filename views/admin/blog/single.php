<div class="col-md-12 col-xl-12 mb-4">
    <!-- Card Image -->
    <div class="card">
        <img class="card-img-top" src="<?= config::baseUploadUrl().$blog['thumbnail']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="h3 card-title"><b><?= $blog['title']; ?></b></h5>
            <h6 class="card-subtitle text-muted text-uppercase mb-3"><?= $blog['category']; ?></h6>
            <div class="card-text">
                <?= $blog['content']; ?>
            </div>
            <span class="likes">
                <span style="margin-right: 15px;">
                    <i class="fa fa-heart"></i>
                    350
                </span>
                <span>
                    <i class="fa fa-comment"></i>
                    5
                </span>
            </span>
            <hr>
            <span>
                <a href=""><i class="fa fa-edit"></i></a>
                <a href="" class="text-danger"><i class="fa fa-trash"></i></a>
            </span>
        </div>
    </div>
    <!-- End Card Image -->
</div>