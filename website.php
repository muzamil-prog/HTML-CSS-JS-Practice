<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website </title>
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
    /* main styling */
    .container{
        display: flex;
        margin-top: 60px;   /*offset navbar height*/
    }
    .sidebar{
        width: 25%;
        /* background-color: #f0f0f0; */
        background-color: green;
        height: 400px;
        border-bottom-right-radius: 50%;
    }
    .sidebar ul{
        list-style:none;
    }
    .sidebar ul li{
        margin:20px 0;
        padding-left: 20px;
        
    }
    .sidebar ul li a{
        text-decoration: none;
        color: white;
    }
     a:hover{
        color: goldenrod !important;
        font-weight: bold;
    }
    /* styleing main content */
    .main-content h2{
        margin-bottom: 20px;
        margin-left:20px;
        margin-top:15px;

    }
    .main-content p{
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .content-boxes{
        display:flex;
        gap: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .content-box{
        padding: 20px;
        padding-left: 90px;
        flex: 1;
        background-color: #e0e0e0;
        position: relative;

    }
    .badge{
        position:absolute;
        top: 10px;
        right: 10px;
        background-color: red;
        padding: 5px 10px;
        font-size:12px;
        font-weight: bold;
        z-index: 1000;
        border-radius: 5px;
        color: white;

    }
    .bootem-section{
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    .bootem-section button{
        padding: 10px 20px;
        border: 2px solid goldenrod;
        background-color: white;
        cursor: pointer;
        font-weight: bold;
        transition: 2s;
        color: goldenrod;
    }
    .bootem-section button:hover{
        background-color: goldenrod;
        color: white;
    }
    /* .Clearfix::after{
        content: "";
        display: table;
        clear: both;
    } */
    /* responsive */
    ::-webkit-scrollbar{
        width:  3px;
    }
    ::-webkit-scrollbar-thumb{
        background: goldenrod;
         border-radius: 100vh; 
    }
    ::-webkit-scrollbar-track{
        background: green;
    }
    @media (max-width: 768px){
        .container{
            flex-direction: column;


        }
        .sidebar, .main-content{
            width:100%;
            border-radius: 0;
            
        
        }
        .content-boxes{
            flex-direction: column;
        }
    }




   </style>
</head>
<body>
    <!-- navbar  -->
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
     <!-- section here -->
      <main>
        <div class="container Clearfix">
        <aside class="sidebar">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="register.php">Regester</a></li>
            </ul>
        </aside>
        <!-- main content -->
         <section class="main-content">
            <h2>Welcome tho the Mini Website </h2>
            <p>This section contains information about the website layout using CSS Flexbox and positioning.</p>
            <div class="content-boxes">
                <div class="content-box">
                    <div class="badge">New</div>
                    <h3>Box 1</h3>
                    <p>contecnt for the first box</p>
                </div>
                <div class="content-box">
                    <h3>Box 2</h3>
                    <p>contecnt for the first box</p>
                </div>
                <div class="content-box">
                    <h3>Box 3</h3>
                    <p>contecnt for the first box</p>
                </div>
            </div>
            <div class="bootem-section">
                <button>Button 1</button>
                <button>Button 2</button>
                <button>Button 3</button>
            </div>
         </section>
        </div>
      </main>
      <!-- footer here -->

    
</body>
</html>