<!DOCTYPE html>
<?php $currentPage = "about" ?>

<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Goofy Grandad</title>
    <meta name="description" content="Goofy Grandad's website."/>

    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script type="text/javascript"
            src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript"
            src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="slider.js"></script>

</head>

<body>
    <?php include "header.php";?>

    <div class="content">
        <main class="main-area">
            <section class="about">
                <article>
                    <h2>Who is Goofy Grandad?</h2>
                    <p> Goofy Grandad, also known as Joe Heckstall,
                        is dedicated to bringing messages of love and
                        happiness to kids and seniors.
                        <br><br>
                        Joe's most recent venture is that of an entrepreneur.
                        He released his first book, <i>Grandparents
                            Aren't Goofy! Yes They Are, Too!</i>
                        The humorous side of Joe is captured in this book as he
                        gives encounters from his own experience of the joy of
                        grand parenting. Joe plans to market not
                        only the book, but the entire line of "Goofy Grandparents"
                        merchandise.
                    </p>
                </article>
                <div class="biophoc">
                    <img src="images/jh.png" class="biophoto">
                </div>
            </section>
        </main>
    </div>

    <?php include "footer.php";?>
</body>

</html>
