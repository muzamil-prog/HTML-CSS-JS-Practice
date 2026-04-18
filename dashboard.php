<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is Dashboard</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background-color:goldenrod;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        z-index: 1000;
padding-inline: 20px;
    backdrop-filter: blur(8px);
    }
    .logo{
        font: size 24px;
        font-weight: bold;
    }
    nav ul{
        display:flex;
        list-style:none;
        
        
    }
   nav ul li{
        margin: 20px;
    }
    nav li a{
        
        text-decoration: none;
        color: white;

    }
     nav li:hover{
        background-color:palevioletred;
    }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Welcome Muzammil</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Content</a></li>
            </ul>
        </nav>
       
    </header>
    <main> <h1>Welcome to My dashboard</h1></main>
</body>
</html>