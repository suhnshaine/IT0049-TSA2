<!DOCTYPE html>
<html>

<head>
    <title>Today's Tasks</title>
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
        <h1>Today's Tasks</h1>

        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?= esc($task['title']) ?>
                    (<?= esc($task['status']) ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>