<h1>Записи</h1>
<style>
    article{
        padding: 10px;
        margin-top: 10px;
        display: block;
        position: relative;
        border-radius: 10px;
    }
    .default{
        border: 1px solid grey;
    }
    .hot-red{
        border: 3px solid red;
        text-align: center;
    }
    .hot-orange{
        border: 3px solid orange;
        text-align: center;
    }
    .hot-green{
        border: 3px solid green;
        text-align: center;
    }
</style>
<?php foreach($data['news'] as $key => $record): ?>
    <?php 
        $class = 'default';
        if($key == 0){
            $class = 'hot-red';
        }elseif($key == 1){
            $class = 'hot-orange';
        }elseif($key == 2){
            $class = 'hot-green';
        }
    ?>
    <article class="<?php echo $class; ?>">
    <a href="article.php?id=<?php echo $record->id; ?>">
        <?php echo $record->title; ?>
    </a>  
    <div><?php echo $record->text; ?></div>
    <div style="font-weight: bold;"><?php echo $record->author; ?></div>
    </article>
<?php endforeach; ?>