<body>

            <?php snippet('menu') ?>
            <?php snippet('header') ?>




<section id="inhalt">
    <div class="grid-0">
          <h2 class="grid-inhalt"><?= $page->text()->html() ?></h2>
          <h3 class="grid-inhalt"><?= $page->textarea()->html() ?> </h3> 
          
    </div>  


    <div class="cards" id="grid1">
   

    <?php foreach (page('portfolio')->children()->listed() as $portfolio): ?> 

        <article class="card"> 

        <figure> 
            <?php if ($cover = $portfolio->cover()): ?><?= $cover->resize(550, 700) ?>
        </figure> 
  
  <?php endif ?>

            <div class="card_text">
              <p class="p_fett"><?= $portfolio->text() ?></P>
              <div class="button-standard--abstand"><p><?= $portfolio->textarea() ?><p></div>
              <button class="button_standard"> <a class="button_standard--link" href="<?= $portfolio->url() ?>"> mehr </a> </button>
            </div> 

        </article> 

        <?php endforeach ?>
    </div>

</section>

</main>

<footer class="footer"> Hier steht noch nichts</footer>
  
</body>
</html>
