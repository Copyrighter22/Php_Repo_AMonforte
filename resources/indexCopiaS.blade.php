<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-full">
<?php require '../resources/views/layout/nav.blade.php'; ?>
<header>
    <h1><?=$greeting;?></h1>

    <table>
        <tr>
           <th>Id</th>
            <th>Title</th>
            <th>Description1</th>
            <th>Completed</th>
            <th></th>
        </tr>

        <?php foreach ($tasks as $task): ?>
        <tr>
            <th><?=$task->id;?></th>
            <th><?=$task->title;?></th>
            <th><?=$task->description;?></th>
            <th><?=$task->complited;?></th>
        </tr>
        <?php endforeach; ?>
    </table>
</header>
</body>
</html>