<!DOCTYPE html>
<html>

<head>
    <title>All Tasks</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <h1>Tasks for Today Management System</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile</a> |
        <?php if (session()->get('logged_in')): ?>
            <a class="btn" href="<?= site_url('tasks/new') ?>">
                New Task
            </a> |
            <a href="<?= site_url('logout') ?>">
                Logout
            </a>
        <?php else: ?>
            <a href="<?= site_url('login') ?>">
                Login
            </a>
        <?php endif; ?>
    </nav>

    <div class="container">
        <h1>All Tasks</h1>

        <table border="1">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date Created</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['created_at']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                    <td>
                        <?php if (session()->get('logged_in')): ?>
                            <div class="actions">
                                <a class="btn btn-edit" href="<?= site_url('tasks/edit/' . $task['id']) ?>">
                                    Edit
                                </a>
                                <a class="btn btn-delete"
                                    href="<?= site_url('tasks/delete/' . $task['id']) ?>"
                                    onclick="return confirm('Are you sure you want to delete this task?');">
                                    Delete
                                </a>
                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>