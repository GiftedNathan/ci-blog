<!-- <?php print_r($random)  ?> -->

<main class="container my-5">
  <div class="p-4 p-md-5 mb-4 rounded bg-light">
    <div class="col-md-12 px-0">
      <strong class="d-inline-block mb-2 ">#<?= $random[0]['slug']  ?></strong>
      <h1 class="display-4 fst-italic"><?= $random[0]['title']  ?></h1>
      <div class="mb-1 text-muted"><?= $random[0]['created_at']  ?></div>
      <p class="lead my-3"><?= $random[0]['body']  ?></p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">

    <?php foreach ( $posts as $post) { ?>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">#<?= $post['slug']  ?></strong>
          <h3 class="mb-0"><?= $post['title']  ?></h3>
          <div class="mb-1 text-muted"><?= $post['created_at']  ?></div>
          <p class="card-text mb-auto"> <?= $post['body']  ?></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
      </div>
    </div>
    <?php   } ?>

  </div>


</main>