<?php include("header.html") ?>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }

        .row1 {
            width: 100%;
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
        }

        #co1 h1 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 2em;
            color: black;
            margin-bottom: 15px;
            
            margin: 0;
            padding: 0;

        }

        #co1 img {
            width: 60%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition:  color 0.5s ease-in-out;
        }
        #co1 img:hover{
            color: #1e0732ff;
        }

        #co2 {
            margin-top: 20px;
            font-size: 1.1em;
            color: #333;
            padding: 0 15%;
            line-height: 1.6;
        }

        #co2 span {
            font-weight: bold;
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="row1">
        <div id="co1">
            <h1>Welcome to Tomato 🍅</h1>
            <img src="https://colorlib.com/wp/wp-content/uploads/sites/2/pizza-cafe-food-website-template.jpg" alt="Delicious food">
        </div>
        <div id="co2">
            <p><span>"Craving something delicious?"</span> 🍔🍕🍝 Get your favorite meals delivered hot and fresh, right to your doorstep – fast, easy, and tasty!</p>
        </div>
    </div>
</body>
<?php include("footer.html") ?>
