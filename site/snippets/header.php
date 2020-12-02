<main class="main">
    <header id="header_bereich"> 

        <div id="divbild">

            <?php if($image = $page->image()): ?>
            <image class="headerbild" src= "<?= $image->url() ?>"  alt="">
            <?php endif ?>

        </div>

            <div id="head_line"><h1 id= "head_header"><?= $page->headline() ?></h1></div>

    </header>