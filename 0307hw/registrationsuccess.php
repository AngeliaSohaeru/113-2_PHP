<html>

<head>
    <meta charset = "utf-8">
    <title>Registration Successful!</title>
    <style>
        body {
            background-color: #E4FFD1;
            color: #363636;
            font-family: Garamond, serif;
            font-size: 20px;
            text-align: center;
        }

        .output-container {
            background-color: white;
            width: 50%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        .output {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <BR><font size = "6"><b>Your Registration for 'NUK-IM 2025 Welcome Party' is Successful!</b></font><BR>
    <font color = "#D60A0A">Please Check Whether Your Data Below is Accurate</font><BR><BR>

    <div class="output-container">
        <?php
            $uName = $_GET["uName"];
            $uId = $_GET["uId"]; 
            $uEmail = $_GET["uEmail"];
            $uBirth = $_GET["uBirth"];
            $uAge = $_GET["uAge"];
            $uColor = $_GET["uColor"];
            $uGrade = $_GET["uGrade"];
            $uGender = $_GET["uGender"];
            $uCity = $_GET["uCity"];
            $uLike = $_GET["uLike"];
            $uComment = $_GET["uComment"];

            echo "<p class='output'>Your Name is: $uName</p>";
            echo "<p class='output'>Your Student ID is: $uId</p>";
            echo "<p class='output'>Your Email is: $uEmail</p>";
            echo "<p class='output'>Your Birthday is: $uBirth</p>";
            echo "<p class='output'>Your Age is: $uAge</p>";
            echo "<p class='output'>Your Favorite Color is: <span style='color:$uColor;'>$uColor</span></p>";
            echo "<p class='output'>You're a ";
            if (!empty($uGrade)) {
                echo implode(", ", $uGrade);
            } else {
                echo "None selected";
            }
            echo "<p class='output'>Your Gender is: $uGender</p>";
            echo "<p class='output'>Your City is: $uCity</p>";
            echo "</p>";       
            echo "<p class='output'>Your Website Rating: $uLike</p>";
            echo "<p class='output'>Your Comment: ".nl2br(htmlentities($uComment))."</p>";
        ?>
    </div><BR><BR>  

    <b>Thank You for Registering, We Hope to See You There!</b><BR><BR><BR>
</body>

</html>
