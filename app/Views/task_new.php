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
        <h1>New Task</h1>

        <form action="<?= site_url('tasks/create') ?>" method="post">
            <p>
                <label for="title">Title:</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    required>
            </p>
            <p>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
            </p>
            <p>
                <label for="task_date">Date:</label>
                <input
                    type="date"
                    id="task_date"
                    name="task_date"
                    required>
            </p>
            <button type="submit">
                Save
            </button>
        </form>
    </div>

</body>

</html>