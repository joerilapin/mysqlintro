<?php
//require 'Model/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body class="text-center">

<div class="jumbotron" style ="margin-bottom:0; color:white; background-color:#0000ff;">
    <h2 class="text-center" style = "font-size:50px; font-weight:600;">MySQL intro</h2>
</div>
    <div class="container">

    <form action="../index.php" method="post">

         <section>

             <label for="first_name"></label>
             <input id="first_name" name="first_name" required>
        <br/>;
        </section>
        <section>
            <label for="last_name">lastName:</label>
            <input id="last_name" name="last_name" required>
        </section>
        <section>
            <label for="username">username:</label>
            <input id="username" name="username" required>
        </section>
        <section>
             <label for="linkedin">linkedin</label>
            <input id="linkedin" name="linkedin" required>
        </section>
        <section>
             <label for="github">github:</label>
             <input id="github" name="github" required>
         </section>
        <section>
            <label for="email">email:</label>
            <input id="email" name="email" required>
        </section>


        <label for="preferred_language" > Choose language here</label>
        <select name="preferred_language">
            <option value="nl">nl</option>
            <option value="en">en</option>
        </select>

        <section>
            <label for="avatar">avatar:</label>
            <input id="avatar" name="avatar" required>
        </section>
        <section>
            <label for="video">video:</label>
            <input id="video" name="video" required>
        </section>
        <section>
            <label for="quote">quote:</label>
            <input id="quote" name="quote" required>
        </section>
        <section>
            <label for="quote_author">quote_author:</label>
            <input id="quote_author" name="quote_author" required>
        </section>
        <section>
            <label for="create_at">quote_author:</label>
            <input id="create_at" name="create_at" required>
        </section>
        <input type="submit" name="submit">
    </form>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>