<?php $album = $data['album']; ?>
<?php include __DIR__ . '../../errors.php'; ?>
<style>
input, textarea {
    display: block;
    margin: 10px 40%;
}
</style>
<div class="stage" style="text-align: center;">
    <h2>Измненить альбом</h2>
    <form action="/exam/admin/admin-handler.php" method="post" >
        <input type="text" name="album-title" value="<?php echo $album->title; ?>">
        
        <input type="text" name="album-thumbnail" value="<?php echo $album->thumbnail; ?>">
        
        <input type="text" name="album-year" value="<?php echo $album->year;?>">
        
        <textarea name="album-records" cols="30" rows="10">
            <?php foreach($album->records as $record):?>
                <?php echo $record . ' ';?>
            <?php endforeach; ?>
        </textarea>
        <input type="hidden" name="id" value="<?php echo $album->id;?>">
        <input type="hidden" name="action" value="edit-album">
        <input type="submit" value="Update">
    </form>
</div>