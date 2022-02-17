<?php
require __DIR__ . '/vendor/autoload.php';
use src\Controller\NoteController;
use src\Model\NoteModel;

$noteController = new NoteController();
$page = $_REQUEST['page']??"";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<a href="index.php">Home</a>
<a href="index.php?page=note-list">Notes</a>
<a href="index.php?page=note-create">Add New</a>
<?php
switch ($page){
    case 'note-list':
        $noteController->showAllNote();
        break;
    case 'note-create':
        $noteController->addNewNote();
    case 'note-detail':
        $noteController->showDetailNote($_GET['id']);
        break;
    case 'note-delete':
        $id = $_REQUEST['id'];
        $noteController->deleteNote($id);
    case 'note-update':
        $noteController->updateNote()
    default:
}
?>
</body>
</html>


