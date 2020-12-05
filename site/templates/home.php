<body>

            <?php snippet('menu') ?>
            <?php snippet('header') ?>




<section id="inhalt">
    <div class="grid-0">
          <h2 class="grid-inhalt"><?= $page->headline()->html() ?></h2>
          <h3 class="grid-inhalt"><?= $page->introtext()->html() ?> </h3> 
          
    </div>  


    <div class="cards" id="grid1">
   

    <?php foreach (page('portfolio')->children()->listed() as $portfolio): ?> 

        <article class="card"> 

        <figure> 
            <?php if ($cover = $portfolio->cover()): ?><?= $cover->resize(550, 700) ?>
        </figure> 
  
  <?php endif ?>

            <div class="card_text">
              <p class="p_fett card_text--groesse"><?= $portfolio->headline() ?></p>
              <div class="button-standard--abstand"><p class="card_text--groesse"><?= $portfolio->textarea() ?><p></div>
              <button class="button_standard"> <a class="button_standard--link" href="<?= $portfolio->url() ?>"> mehr </a> </button>
            </div> 

        </article> 

        <?php endforeach ?>
    </div>

</section>

<section id="home_selbstdarstellung" class="grid-0">
    <div class="home_container_selbstdarstellung">
  
            <p class="spalte"><?= $page->selbstdarstellung() ?><p>

            <?php if($image = $page->image()): ?>
           
                <img class="selbstdarstellung_bild" src=" <?= $page->selbstdarstellung_bild()->url() ?>" alt="">
                <?php endif ?>
    </div>
</section>

</main>

<footer class="footer"> Hier steht noch nichts</footer>
  
</body>
</html>
