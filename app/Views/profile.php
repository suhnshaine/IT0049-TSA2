<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
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
            <a href="<?= site_url('tasks/new') ?>">
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
        <h1>Profile</h1>

        <p>Username: <?= esc($user['username']) ?></p>
        <p>Full Name: <?= esc($user['full_name']) ?></p>
        <p>Email: <?= esc($user['email']) ?></p>
        <p>Date Created: <?= esc($user['created_at']) ?></p>
    </div>

</body>

</html>