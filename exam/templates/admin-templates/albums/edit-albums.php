<?php $albums = $data['albums']; ?>
    <table>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Year</th>
            <th>Records</th>
        <?php foreach($albums as $album):?>
            <tr>
                <td><?php echo $album->id; ?></td>
                <td><?php echo $album->title; ?></td>
                <td><?php echo $album->thumbnail; ?></td>
                <td><?php echo $album->year; ?></td>
                <td>
                    <?php foreach($album->records as $record):?>
                        <?php echo $record . ' ';?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <a href="?edit-album=1&id=<?php echo $album->id; ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>   