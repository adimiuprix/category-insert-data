<!-- app/Views/category_add.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>

    <?php if (isset($validation)): ?>
        <div class="validation-errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('category/add') ?>">
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" id="category_name" value="<?= set_value('category_name') ?>" />

        <br /><br />

        <label for="category_description">Category Description:</label>
        <textarea name="category_description" id="category_description"><?= set_value('category_description') ?></textarea>

        <br /><br />

        <button type="submit">Add Category</button>
    </form>
</body>
</html>
