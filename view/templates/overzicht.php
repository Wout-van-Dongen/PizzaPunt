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
            <form id="loginbar" method="post" action="controllers/AanmeldController.php">
                <label form="loginbar" for="username-login">Gebruikersnaam: </label>
                <input id="username-login" type="text" name="usr"/>
                <label form="loginbar" for="wachtwoord-login">Wachtwoord: </label>
                <input id="wachtwoord-login" type="password" name="pass"/>
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
                <div id="winkemand-container">
                <?php
                if (!empty($winkelmand))
                {
                    print "<h2>Winkelmandje</h2>";
                    print "<table><thead>"
                    . "<tr>"
                            . "<th>Artikel</th>"
                             . "<th>Bescrijving</th>"
                             . "<th>Artikelprijs</th>"
                             . "<th>Aantal</th>"
                             . "<th>Prijs</th>"
                                . "<th></th>"
                            . "</tr>"
                            . "</thead><tbody>";
                    foreach ($winkelmand as $item)
                    {
                        print "<tr>";
                        print "<td>" . $item["product"]->getNaam() . "</td>";
                         print "<td>" . $item["product"]->getBeschrijving() . "</td>";
                          print "<td>&euro;" . $item["product"]->getPrijs() . "</td>";
                          print "<td>" . $item["aantal"] . "</td>";
                          print "<td>&euro;" . $item["aantal"]*$item["product"]->getPrijs() . "</td>";
                          print "<td> <a href=\"controllers/WinkelmandController.php?action=rm&amp;pid=" .  $item["product"]->getProductID() .    "\"/>verwijder uit mandje</a></td>";
                          print " </tr>";
                    }
                    print "</tbody><tfoot></tfoot></table>";
                }
                ?>
                </div>
            </section>
            <section id="pizza-aanbod">
                <ul>
                    <?php
                    foreach ($producten as $product)
                    {
                        print "<li>";
                        print "<h3> " . $product->getNaam() . "</h3>";
                        print "<figure><img class=\"product\" src=\"images/producten/p" . $product->getProductID()   . ".png\"/></figure>";
                        print "<div class=\"product-info\">";
                        print "<span class=\"description\">" . $product->getBeschrijving() . "</span>";
                        print "<span class=\"prijs\"> &euro;" . $product->getPrijs() . "</span>";
                        print "<span><form action=\"controllers/WinkelmandController.php\" method=\"post\"><input type=\"number\" value=\"0\" name=\"aantal\"/>" .
                                "<input type=\"hidden\" value=\"" . $product->getProductID() . " \" name=\"pid\"/>" .
                                "<input type=\"submit\" value=\"Voeg aan mandje toe\"/></form></span>";
                        print "<span class=\"product-ingredienten\"> ";
                        $ingredienten = $product->getIngredienten();
                        foreach ($ingredienten as $ingredient)
                        {
                            print $ingredient->getIngredientID() . ", ";
                        }
                        print "</span>";
                        print "</div>";
                        if ($product->isVegetarisch())
                        {
                            print "<figure><img class=\"vegetarisch\" src=\"view/img/veggie.png\"/></figure>";
                        }
                        else
                        {
                            print "<figure><img class=\"vegetarisch\" src=\"view/img/noveggie.png\"/></figure>";
                        }
                        print "</li>";
                    }
                    ?>
                </ul>
            </section>

        </div>
    </body>
</html>

