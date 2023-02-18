<!-- category.php -->
<h1>List of Categories</h1>
<a href="/category/add">Tambah</a>
<table>
    <thead>
        <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?= $category['category_id'] ?></td>
            <td><?= $category['category_name'] ?></td>
            <td><?= $category['category_description'] ?></td>
            <td>
                <a href="/category/edit/<?= $category['category_id'] ?>">Ubah</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
