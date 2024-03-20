<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            text-decoration: none;
        }
        .navbar{
            background: sandybrown;
            font-family: arial, sans-serif;
            padding: auto;
            border-radius: 20px;
            margin: auto;
            width: auto;
            justify-content:center;
        }
        .navdiv{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo{
            font-size: 35px;
            font-weight: bold;
            height: 65px;
            border-radius: 20px;
        }
        li{
            list-style: none;
            display:inline-block;
            padding-right:100px;
        }
        li a{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right: 25px;
            padding-right:100px;
        }
        #Logout{
            border: 1px  solid black;
            border-radius: 12px;
            padding: 3px 2px;
            color: black;
        }
        /* Dropdown Button */
        .dropbtn {
            background-color:sandybrown;
            color: white;
            padding: 10px;
            font-size: 15px;
            border: none;
            cursor: pointer;
            border-radius: 20px;

        }
        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: black;
        }
        /* The search field */
        #myInput {
            box-sizing: border-box;
            background-image: url('searchicon.png');
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
            width: 100%; /* Adjust this width according to your layout */
        }
        /* The search field when it gets focus/clicked on */
        #myInput:focus {outline: 3px solid #ddd;}
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            border: 1px solid #ddd;
            z-index: 1;
        }
        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: sandybrown}
        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}


        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: sandybrown;
            color: white;
            text-align: center;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-left {
            margin-left: 20px;
        }
        .footer-right {
            margin-right: 20px;
        }
        .footer-icons img {
            width: 30px;
            margin-left: 15px;
        }
.face{
  height: 40px;
}
.insta{
  height: 40px;
}
    </style>
</head>
<body>
   <nav class="navbar">
    <div class="navdiv">
        <img class="logo" src="logo.png" alt="logo">
        <ul>
            <li><a href="userhome.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="logout.php" id="Logout">Logout</a></li>
        </ul>
    </div>
<br>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Filtering</button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            <a href="#">Sort by</a>
            <a href="#">Select cuisine</a>
            <a href="#">Minimum order amount</a>
            <a href="#">Payment type</a>
        </div>
    </div>
</nav>
<h1>hello to my page</h1>

<div class="footer">
    <div class="footer-left">
        SWISY RESTURANT
    </div>
    <div class="footer-center">
        &copy; 2024 SWISY RESTURANT

    </div>
    <div class="footer-right footer-icons">
        <img class="face"src="facebook.png" alt="Facebook">
        <img class="insta"src="insta.webp" alt="Instagram">
    </div>
</div>
<script>
    document.addEventListener("click", function(event) {
        var dropdown = document.getElementById("myDropdown");
        if (!dropdown.contains(event.target) && !event.target.matches(".dropbtn")) {
            dropdown.classList.remove("show");
        }
    });

    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, div, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            var txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

</body>
</html>