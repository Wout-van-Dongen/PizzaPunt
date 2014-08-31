<section class="error">    
<h1 >Er zijn één of meerdere fouten opgetreden.</h1>
        <ul >
            <?php
            foreach ($fouten as $fout) {
                print "<li>" . $fout . "</li>";
            }
            ?>
        </ul>
<a href="index.php">Klik hier om terug te keren naar de home pagina<a>
</section>