<!-- form to search for every movie by a given actor -->
<form action="search-all.php" method="get">
    <fieldset>
        <legend>All movies</legend>
        <div>
            <input name="firstname" type="text" size="12" placeholder="first name" autofocus="autofocus"/>
            <input name="lastname" type="text" size="12" placeholder="last name"/>
            <input type="submit" value="go"/>
        </div>
    </fieldset>
</form>

<!-- form to search for movies where a given actor was with Kevin Bacon -->
<form action="search-kevin.php" method="get">
    <fieldset>
        <legend>Movies with Kevin Bacon</legend>
        <div>
            <input name="firstname" type="text" size="12" placeholder="first name"/>
            <input name="lastname" type="text" size="12" placeholder="last name"/>
            <input type="submit" value="go"/>
        </div>
    </fieldset>
</form>
</div> <!-- end of #main div -->

<div id="w3c">
    <a href="https://validator.w3.org/check/referer">
        <img src="https://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML"/></a>
    <a href="https://jigsaw.w3.org/css-validator/check/referer">
        <img src="https://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS"/></a>
</div>
</div> <!-- end of #frame div -->
</body>
</html>
