<div class="card">
    <header class="card-header">
        <h2 class="h3 card-header-title">Edit Blog</h2>
    </header>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <?php

            if(isset($_POST['add'])) {
                blog::add($_POST['title'], $_POST['writer'], $_POST['category_id'], $_POST['content'], $_POST['publish'], $_FILES['thumbnail']);
            }

            ?>
            <div class="form-group mb-4">
                <label for="defaultInput">Title</label>
                <input id="defaultInput" class="form-control" value="<?= $blog['title']; ?>" type="text" placeholder="Blog Title" name="title">
            </div>

            <div class="form-group mb-4">
                <label for="defaultInput">Category</label>
                <select name="category_id" id="" class="form-control">
                    <option value="<?= $blog['category_id']; ?>" selected><?= $blog['category']; ?> (current)</option>
                    <?php
                    $categories = categories::all();

                    foreach($categories as $category) {
                        $category_name = $category['category'];
                        $category_id = $category['id'];
                        ?>
                        <option value="<?= $category_id ?>"><?= $category_name ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="defaultInput">Writer</label>
                <input id="defaultInput" class="form-control" value="<?= $blog['writer']; ?>" type="text" placeholder="Blog Title" name="writer">
            </div>

            <div class="form-group mb-4">
                <label for="defaultInput">Content</label>
                <textarea name="content" id="summernote" class="form-control">
                    <?= $blog['content']; ?>
                </textarea>
            </div>

            <div class="form-group col-2" style="padding:0">
                <label class="d-flex align-items-center justify-content-between">
                    <div class="form-toggle">
                        <input name="publish" type="checkbox">

                        <div class="form-toggle__item">
                            <i class="d-inline-block"></i>
                        </div>
                    </div>
                    <span class="form-label-text">Publish</span>
                </label>
            </div>

            <button class="btn btn-primary btn-block" type="submit" name="add">Add Blog</button>
        </form>
    </div>
</div>