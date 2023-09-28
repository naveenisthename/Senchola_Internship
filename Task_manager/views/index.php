<!DOCTYPE html>
<html>

<head>
    <title>Task Manager</title>
</head>

<body>
    <h1>Task List</h1>
    <a href="<?php echo base_url('tasks/create'); ?>">Create New Task</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?php echo $task['id']; ?></td>
                <td><?php echo $task['title']; ?></td>
                <td><?php echo $task['description']; ?></td>
                <td><?php echo $task['created_at']; ?></td>
                <td><?php echo $task['updated_at']; ?></td>
                <td>
                    <a href="<?php echo base_url('tasks/edit/' . $task['id']); ?>">Edit</a>
                    <a href="<?php echo base_url('tasks/delete/' . $task['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>