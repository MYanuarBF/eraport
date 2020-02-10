<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <style>
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 60px;
        padding-bottom: 40px;
        background-color: #F6F6F6;
    }
    .container-fluid{
        width: 95%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    .fixed-header{
        width: 100%;
        position: fixed;        
        background: #F6F6F6;
        padding: 10px 0;
        color: #80A3FF;
        top: 0;
        left: 0;
        border-bottom-style: solid;
    }
    /* Some more styles to beutify this example */

    /* navbar */
    nav a{
        text-decoration: none;
    }
    .navbar{
        padding: 10px;
    }
    .navbar a{
        font-family: Gotham;
        font-style: normal;
        font-weight: 250;
        color: #A6A6A6;
        padding-left: 25px;
        padding-right: 25px;
    }

    .logo a{
        font-family: Gotham;
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        color: #80A3FF;
    }
    
    .flex-container{
        display: flex;
        justify-content: space-between;
    }

    .sidenav {
    height: 100%;
    margin-top: 60px;
    width: 102px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #80A3FF;
    overflow-x: hidden;
    padding-top: 60px;
    transition: 0.5s;
    }

    /* ON HOVER */
    .sidenav:hover{
    width: 250px;
    }

    /* The navigation menu links */
    .sidenav a{
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #fff;
        display: block;
        transition: 0.3s
    }

    .sidenav .main{
        min-height: 600px;	
    }

    .sidenav a:hover, .offcanvas a:focus{
        color: #f1f1f1;
    }

    .main {
        margin-left: 250px; 
        padding: 20px;
        float:left;
		width:70%;
        min-height: 600px;
        background-color: #F6F6F6;
    }

</style>
</head>
<body>
    <div class="fixed-header">
        <div class="container-fluid">
            <nav class="flex-container">
                <div class="logo">
                    <a href="#" >E-RAPORT</a>
                </div>
                <div class="navbar">
                    <a href="#">Beranda</a>
                    <a href="#">Biodata</a>
                    <a href="#">Nilai</a>
                    <a href="#">Keluar</a>
                </div>
            </nav>
        </div>
    </div>
        <div class="sidenav"></div>
        <a href="#">Biodata</a>
        <a href="#">Nilai</a>
        <a href="#">Laporkan</a>
        </div>
</body>
</html>