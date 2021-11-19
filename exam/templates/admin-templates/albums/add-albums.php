<?php include __DIR__ . '../../errors.php'; ?>
<div class="stage" style="text-align: center; margin: 15% 0">
    <h2>Добавить альбом</h2>
    <form action="/exam/admin/admin-handler.php" method="post" enctype="multipart/form-data">
        <div class="albums-cover">
            <label for="album-cover">Album's cover</label>
            <input type="file" name="album-cover" id="">
        </div>
        <div class="album-year">
            <label for="album-year">Album's Year</label>
            <input type="number" name="album-year" id="">
        </div>
        <div class="album-name">
            <label for="album-name">Album's Name</label>
            <input type="text" name="album-name" id="">
        </div>
        <div class="album-content">
            <label for="album-content">Album's Content</label>
            <textarea name="album-content" id="" cols="20" rows="1"></textarea>
        </div>
        <input type="hidden" name="action" value="add-album">
        <button type="submit">Send</button>
    </form>
</div>


