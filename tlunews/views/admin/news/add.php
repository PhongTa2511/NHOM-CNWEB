<form action="" method="POST" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title" required>
    
    <label>Content</label>
    <textarea name="content" required></textarea>
    
    <label>Category</label>
    <select name="category_id">
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
        <?php endforeach; ?>
    </select>
    
    <label>Image</label>
    <input type="file" name="image">
    
    <button type="submit">Add News</button>
</form>
