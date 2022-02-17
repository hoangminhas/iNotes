<?php
?>
<h2>Them moi ghi chu</h2>
<form action="#" method="post">
    <p style="display: inline">Type ID</p>
    <input type="text" name="typeId"><br>
    <p style="display: inline">Title</p>
    <input type="text" name="title"><br>
    <p>Content</p>
    <textarea name="content" cols="30" rows="10"></textarea>
    <button onclick="location.href = 'index.php?page=note-list';" type="button" name="cancel">Cancel</button>
    <button name="save">Save</button>

</form>
