<!DOCTYPE html>
<html>
    <head>
        <title>PizzaPunt</title>
        <link href="view/css/reset.css" type="text/css" rel="stylesheet"/>
        <link href="view/css/default.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <section id="user-status-section">
            <?php //if user is not logged  ?>
            <form id="loginbar" method="post" action="#">
                <label form="loginbar" for="username-login">Gebruikersnaam: </label>
                <input id="username-login" type="text" name="username"/>
                <label form="loginbar" for="wachtwoord-login">Wachtwoord: </label>
                <input id="wachtwoord-login" type="password" name="wachtwoord"/>
                <input type="submit" value="aanmelden"/>
            </form>
            <span>
                <a href="#" title="registreren">Meld je hier aan als nieuwe klant.</a>
            </span>
            <?php //else show user options (name, logout) ?>
        </section>
        <div id="wrapper">
            <header>
                <figure>
                    <!-- The image's source must use references relative to the controllers -->
                    <img id="logo" src="view/img/PizzaPuntLogo.svg" alt="Pizza Punt Logo" title="Pizza Punt Logo"/>
                </figure>
                <h1>Pizzeria PizzaPunt</h1>
            </header>
            <section id="winkelmand">


            </section>
            <section id="product-menu">
                
            </section>
            <section id="pizza-aanbod">
                <ul>
                    <?php
                    foreach ($producten as $product) {
                        print "<li>";
                        print "<h3> ";
                        print $product->getNaam();
                        print "</h3>";
                        print "<img class=\"product\" src=\"view/img/pizza-icon.png\"/>";
                        print "<span class=\"description\">" . $product->getBeschrijving() . "</span>";
                        print "<span class=\"prijs\"> &euro;" . $product->getPrijs() . "</span>";
                        print "<span><form><input type=\"number\" name=\"aantal\"/><input type=\"submit\" value=\"Voeg aan mandje toe\"/></form></span>";
                        print "<span> Ingredienten: ";
                        $ingredienten = $product->getIngredienten();
                        foreach ($ingredienten as $ingredient) {
                            print $ingredient->getIngredientID();
                        }
                        print "</span";
                        print "</li>";
                    }
                    ?>
                </ul>
            </section>

        </div>
    </body>
</html>

