<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Shibu Sharma">
    <title><?php echo $title ?> | Online Store</title>
    <link rel="stylesheet" href="/onlinestores/css/main.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/project-onlinestores/index.php" <?php if($active =='home') {echo "class = 'active'";}?> >Home</a></li>
                <li><a href="/project-onlinestores/login.php" <?php if($active =='login') {echo "class = 'active'";}?>>Login</a></li>
                <li><a href="/project-onlinestores/register.php" <?php if($active =='register') {echo "class = 'active'";}?>>Register</a></li>
                <li><a href="/project-onlinestores/logout.php" <?php if($active =='logout') {echo "class = 'active'";}?>>Logout</a></li>
                <li><a href="/project-onlinestores/dashboard/" <?php if($active =='dashboard') {echo "class = 'active'";}?>>Dashboard</a></li>

            </ul>
        </nav>

    </header>

    <div class="container">
        

    