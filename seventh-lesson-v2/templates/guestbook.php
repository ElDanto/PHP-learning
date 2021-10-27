<h1><?php echo $data['title']; ?></h1>
<table>
<?php foreach($data['posts'] as $post) : ?>
    <tr>
        <td><?php echo $post['author']; ?> </td>
        <td><?php echo $post['message']; ?></td>
        <td><?php echo $post['rating']; ?></td>
    </tr>
<?php endforeach; ?>
</table>