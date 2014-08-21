<!DOCTYPE html>
<html>
    <head>
        <title>PizzaPunt</title>
        <link href="view/css/reset.css" type="text/css" rel="stylesheet"/>
        <link href="view/css/default.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
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
            <section id="pizzaaanbod">
                <?php
                    foreach($categories as $category ){
                    print "<ul id='"+ $category->getName() + "'>";
                        foreach($category->getItems() as $item){
                            print "<li>cookie</li>";
                        }
                        print "</ul>";


                    }
                    ?>
            </section>

        </div>
    </body>
</html>

