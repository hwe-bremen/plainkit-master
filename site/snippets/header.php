<main class="main">
    <header id="header_bereich"> 

        <div id="divbild">

            <?php if($image = $page->image()): ?>
            <image class="headerbild" src= "<?= $image->url() ?>"  alt="">
            <?php endif ?>

        </div>

            <div id="head_line">
                <h1 id= "head_header"><?= $page->header_headline() ?></h1>
                <h3 id= "head_text"><?= $page->headertext() ?></h3>
                </div>

    </header>