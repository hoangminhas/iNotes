<?php
//echo "<pre>";
//var_dump($thisNote);
//die();
?>
<form action="#" method="post">
    <input type="text" name="title" value="<?php echo $thisNote->title ?>"><br>
    <textarea name="content" cols="30" rows="10"><?php echo $thisNote->content ?></textarea><br>
    <button>Save</button>
</form>
