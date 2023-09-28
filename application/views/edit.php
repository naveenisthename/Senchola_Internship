<!DOCTYPE html>
<html>

<head>
    <title>Edit Task</title>
</head>

<body>
    <h1>Edit Task</h1>
    <a href="<?php echo base_url('tasks'); ?>">Back to Task List</a>
    <form method="post" action="<?php echo base_url('tasks/update/' . $task['id']); ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" required><?php echo $task['description']; ?></textarea><br><br>

        <input type="submit" value="Update Task">
    </form>
</body>

</html>