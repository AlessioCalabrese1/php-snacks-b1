<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. -->

    <?php 
        $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quasi earum adipisci laborum. Repellat, assumenda veritatis 
        quisquam ipsam harum, rem, eius eum fugiat hic ut iste porro officia tenetur facere. Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Atque maxime accusantium veniam minima! A dolores excepturi nihil omnis quia labore modi similique neque veritatis, 
        in harum provident tenetur culpa quaerat! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sunt voluptas 
        necessitatibus odio totam quia odit, doloribus incidunt reprehenderit provident atque quas fugiat mollitia ut officia praesentium quae cum saepe!";
    
        $paragraphContainer = explode(".", $paragraph);
        var_dump($paragraphContainer);
    ?>
</body>
</html>