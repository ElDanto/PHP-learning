<?php $record = $data['record']; ?>
<?php if(!empty($record->title)):?>
    <h1><?php echo $record->title; ?></h1>
<?php endif; ?>

<div><?php echo $record->text; ?></div>
<div style="font-weight: bold;"><?php echo $record->author; ?></div>
