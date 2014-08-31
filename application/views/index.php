<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Coding Dojo Courses</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
<?php   if ($this->session->flashdata('error'))
        {   ?>  
            <p><?= $this->session->flashdata('error')?></p>
<?php   }   ?>
	<div id="top">
        <form action='/courses/add' method='post'>
            <p>
                <label>Name:</label>
                <input type='text' name='name'>
            </p>
            <p>
                <label>Description:</label>
                <textarea name='description'></textarea>
            </p>
            <p>
                <input type='submit' value='Add'>
            </p>
        </form>
    </div>

    <div id='main'>
        <table>
            <thead>
                <tr>
                    <td>Course Name</td>
                    <td>Description</td>
                    <td>Date Added</td>
                    <td>Actions</td>
                </tr>
            </thead>

            <tbody>

<?php       foreach ($courses as $course)

            {   ?>               
                <tr>    
                    <td><?= $course['name'] ?></td>
                    <td><?= $course['description'] ?></td>
                    <td><?= $course['created_at'] ?></td>
                    <td><a href=<?= "/courses/show/" . $course['id'] ?>>Remove</a></td>
                </tr>
<?php       } ?>                
            </tbody>    
        </table>
    </div>
</div>
</body>
