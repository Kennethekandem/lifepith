<h1 class="h2 font-weight-semibold mb-4">All Blogs</h1>

<div class="card mb-4">
    <div class="card-header">
        <a href="admin/blog/add" class="btn btn-primary"><i class="fa fa-plus"></i> Add Blog</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="datatable">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Writer</th>
                    <th scope="col">Date Added</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $blogs = blog::all();

                foreach($blogs as $blog) {
                    $blog_id = $blog['id'];
                    $title = $blog['title'];
                    $category = $blog['category'];
                    $writer = $blog['writer'];
                    $date = $blog['timestamp'];
                    ?>
                    <tr>
                        <td><a href="admin/blog/single/<?= $blog_id; ?>"><?= $title; ?></a></td>
                        <td><?= $category; ?></td>
                        <td><?= $writer; ?></td>
                        <td><?= request::timeago($date); ?></td>
                        <td class="text-center">
                            <a id="actions1Invoker" class="link-muted" href="tables.html#!" aria-haspopup="true" aria-expanded="false"
                               data-toggle="dropdown">
                                <i class="fa fa-sliders-h"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="d-flex align-items-center link-muted py-2 px-3" href="admin/blog/edit/<?= $blog_id; ?>">
                                            <i class="fa fa-plus mr-2"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#exampleModal" onclick="$('.blog_id').val('<?= $blog_id; ?>');">
                                            <i class="fa fa-minus mr-2"></i> Remove
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
