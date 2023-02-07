<html>
    <head>
        <title>RVA DB</title>
        <link rel="icon" type="image/x-icon" href="https://romaversitasalbania.org/wp-content/uploads/2017/06/RVA_logo.png">
        <link rel="stylesheet" href="style.css">
        <script>
            var rowIdGlobal;
        </script>
        <script src="jquery-3.6.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="script.js"></script>
        
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="https://db.romaversitasalbania.org/"><img src="https://romaversitasalbania.org/wp-content/uploads/2017/06/RVA_logo.png" alt="logo" width="200px"></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="https://db.romaversitasalbania.org/">Home</a></li>
                        <li><a href="beneficaries.php">Beneficaries</a></li>
                        <li><a href="applicants.php">Applicants</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<?php
    include('conn.php');
?>