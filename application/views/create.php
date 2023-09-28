<!DOCTYPE html>
<html>

<head>
    <title>Create New Task</title>
</head>

<body>
    <h1>Create New Task</h1>
    <a href="<?php echo base_url('tasks/create'); ?>">Back to Task List</a>
    <form method="post" action="<?php echo base_url('tasks/store'); ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br><br>


        <input type="submit" value="Create Task">
    </form>
</body>

</html>