<?= \Config\Services::validation()->listErrors() ?>

<?php if (isset($success)) : ?>
    <div class="alert alert-success"><?= $success ?></div>
<?php endif ?>

<form method="post">
    <div class="form-group">
        <label for="category_name">Category Name</label>
        <input type="text" class="form-control" name="category_name" value="<?= set_value('category_name', $category['category_name']) ?>" />
    </div>
    <div class="form-group">
        <label for="category_description">Category Description</label>
        <textarea class="form-control" name="category_description"><?= set_value('category_description', $category['category_description']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
