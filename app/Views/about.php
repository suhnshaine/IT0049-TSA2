<!DOCTYPE html>
<html>

<head>
    <title>About</title>
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
        <h1>About</h1>

        <p>This system is developed by Shirealeth Acorda, a student in FEU Institute of Technology,
            currently studying as a 3rd year BSIT student specializing in web and mobile application.
            This system was developed for a requirement in IT0049 as a Technical Summative Assessment.
        </p>
        <p>This website is for educational purposes only.</p>
    </div>

</body>

</html>