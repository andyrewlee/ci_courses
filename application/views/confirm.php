<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Confirm Deletion</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/delete.css">
    <link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="container">
        <h1>Are you sure you want to delete the following courses?</h1>

        <div class="row">
            <label>Name:</label>
            <p><?= $name ?></p>
        </div>

        <div class="row">
            <label>Description:</label>
            <p><?= $description ?></p>
        </div>

        <div id="user_choice">
            <a href="/courses/index">No</a>
            <a href=<?= "/courses/destroy/" . strval($id) ?>>
                Yes I want to delete this
            </a>
        </div>

    </div>
<body>