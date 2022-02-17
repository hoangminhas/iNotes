<?php
?>
<h2>Cac ghi chu</h2>
<select name="select">
    <option value="" disabled selected>Phan loai</option>
    <option value="important">Important</option>
    <option value="emergency">Emergency</option>
    <option value="normal">Normal</option>
</select>
<input type="text" name="search">
<button>Tim kiem</button><br>
<table border="5">
    <thead>
    <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Type</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($allNote as $key=>$note): ?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $note->title?></td>
        <td><?php echo $note->name?></td>
        <td><a href="index.php?page=note-detail&id=<?php echo $note->id?>">Detail</a></td>
        <td><a href="index.php?page=note-delete&id=<?php echo $note->id?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
