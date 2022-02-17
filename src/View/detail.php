<?php
//echo "<pre>";
//var_dump($detailNote);
//die();
?>

<h2>Ghi chu</h2>
<p><?php echo $detailNote->title ?></p>
<div style="border: #0b2e13 2px solid; width: 30%" >
    <p><?php echo $detailNote->content ?></p>
</div>
<button type="button">Xoa</button>
<button type="button"><a href="index.php?page=note-update&id=<?php echo $_GET['id']?>">Sua</a></button>
