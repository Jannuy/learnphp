<?php

$title = 'world';

$posts = [
  [
    'title' => 'Some World title 1',
    'date' => 'Januari q, 2021',
    'author' => 'Neeger',
    'body' => 'Some World content 1'
  ],
  [
    'title' => 'Some World title 2',
    'date' => 'Januari q, 2021',
    'author' => 'Manivald',
    'body' => 'Some World content 2',
  ],
  [
    'title' => 'Some World title 3',
    'date' => 'Januari q, 2021',
    'author' => 'Bumahh',
    'body' => 'Some World content 3',
  ],
  [
    'title' => 'Some World title 4',
    'date' => 'Januari q, 2021',
    'author' => 'Peeter',
    'body' => 'Some World content 4',
  ],
];
?>

<?php include __DIR__ . '/partials/header.php' ?>
<main class="container">
  <?php include __DIR__ . '/partials/hero.php' ?>
  <?php include __DIR__ . '/partials/featured.php' ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/post.php' ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php' ?>

    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php' ?>