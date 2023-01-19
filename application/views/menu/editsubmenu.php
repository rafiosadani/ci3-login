<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-3">
                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="menu">Menu</label>
                    <select class="form-control" id="menu" name="menu">
                        <?php foreach ($menu as $m) : ?>
                            <?php if ($submenu['menu_id'] == $m['id']) : ?>
                                <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                            <?php else : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="is_active">Status</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <?php foreach ($status as $s) : ?>
                            <?php if ($submenu['is_active'] == $s['value']) : ?>
                                <option value="<?= $s['value'] ?>" selected><?= $s['status']; ?></option>
                            <?php else : ?>
                                <option value="<?= $s['value'] ?>"><?= $s['status']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary float-right">Edit</button>

            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->