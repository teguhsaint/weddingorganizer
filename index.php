<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' integrity='sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' integrity='sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==' crossorigin='anonymous' />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' />
    <title>Your-Wedding</title>
</head>

<body>
    <div class="navbar">
        <a href="#" style="padding: 0px!important;"><img src="img/logo.png" width="145px" style="position: relative;top:13px;width:200px" alt=""></a>
        <a href="#" class="homes">Home</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Galery</a>
        <a href="#">Testimonial</a>
        <a href="#">Booking</a>
        <a href="#" onclick="shows()" class="icon"><i class="fas fa-bars"></i></a>

    </div>

    <div class="content">
        <?php include 'pages/home.php'; ?>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate.min.js' integrity='sha512-QDsjSX1mStBIAnNXx31dyvw4wVdHjonOwrkaIhpiIlzqGUCdsI62MwQtHpJF+Npy2SmSlGSROoNWQCOFpqbsOg==' crossorigin='anonymous'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js' integrity='sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==' crossorigin='anonymous'></script>

    <script>
        function shows() {
            $('.navbar').toggleClass('show');
        }


        $(document).ready(function() {
            $('.your-class').slick({
                slidesToShow: 1,
                slidesToScroll: 1,

                focusOnSelect: true,
                autoplay: true,
                autoplaySpeed: 6000,
            });
        });
    </script>
</body>

</html>