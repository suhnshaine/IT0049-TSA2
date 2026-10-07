<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Login</h1>

    <?php if(session()->getFlashdata('error')): ?>
        <p class="error">
            <?= session()->getFlashdata('error') ?>
        </p>
    <?php endif; ?>

    <form action="<?= site_url('authenticate') ?>" method="post">
        <p>
            <label for="username">Username:</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                required
            >
        </p>
        <p>
            <label for="password">Password:</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                required
            >
        </p>
        <button type="submit">
            Login
        </button>
    </form>
</body>
</html>