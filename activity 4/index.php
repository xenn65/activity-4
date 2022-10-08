<?php 
    $name = "John Paul R. Azurin";
    $des = "I'm a Web Developer";
    $look = "Attention: I'm looking for a Web Development Job!";
    $profImg = "th.jpg";
    $wallImg = "backround.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .profile-photo {
            max-height: 200px;
            max-width: 200px;
            border-radius: 50%;
            overflow: hidden;
        }
        h1 {
            color: white;
            text-align: center;
            margin-top: 10px !important;
            font-weight: bold !important;
            font-size: 24px !important;
        }
        p {
            color: white;
            text-align: center;
            font-size: 16px !important;
        }
        .overlay {
            background-color: black;
            opacity: .8;
            position: fixed;
            height: 100vh;
            width: 100vw;
            z-index: -1;
        }
        .alert {
            background: white;
            color: seagreen;
            font-size: 24px;
            font-weight: bold;
        }
    </style>

</head>

<?php echo "<body style='background: url($wallImg) no-repeat center fixed; background-size: cover;'>" ?>
    <div class="overlay"></div>
    <div class="alert" style="position: fixed; top: 0px; width: 100%; height: 50px;">
        <marquee behavior="scroll" direction="left">
            <?php echo $look ?>
        </marquee>
    </div>
    <div class="h-screen w-screen flex items-center justify-center">    
        <div>
            <center>
            <?php echo "<img class='profile-photo' src='$profImg'  alt=''>" ?>
            </center>

            <h1><?php echo $name ?></h1>
            <p><?php echo $des ?></p>   
        </div>
    </div>

    <script>

    </script>
</body>
</html>