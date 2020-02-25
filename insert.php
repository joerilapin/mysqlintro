<?php //require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<body>
<form action="index.php" method="post">
    <h1>make user</h1>
    <section>
        <label for="firstName">firstName:</label>
        <input id="firstName" name="firstName" required>
    </section>
    <section>
        <label for="lastName">lastName:</label>
        <input id="lastName" name="lastName" required>
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
        <option value="be">nl</option>
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="ru">ru</option>
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


    <input type="submit" name="submitButton">
</form>
</body>
</html>