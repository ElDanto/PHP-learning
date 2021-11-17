<div class="stage" style="text-align: center; margin: 15% 0">
    <h2>Add Image</h2>
    <form action="/exam/admin/admin-handler.php" method="post" enctype="multipart/form-data">
        <div class="gallery-image">
            <label for="gallery-image">Image</label>
            <input type="file" name="gallery-image" id="">
        </div>
        <div class="gallery-subtitle">
            <label for="gallery-subtitle">Image SubTitle</label>
            <input type="text" name="gallery-subtitle" id="">
        </div>
        <input type="hidden" name="add-image">
        <button type="submit">Send</button>
    </form>
</div>