<?php
$posts = [
    [
      'title' => 'World news1',
      'published' => '16.09.2025',
      'author' => 'Riko',
      'body' => 'Some world news 1'
    ],
    [
      'title' => 'World news1',
      'published' => '17.09.2025',
      'author' => 'Riks',
      'body' => 'Some world news 2'
    ],
    [
      'title' => 'World news1',
      'published' => '18.09.2025',
      'author' => 'Sigma',
      'body' => 'Some world news 3'
    ],
    [
      'title' => 'World news1',
      'published' => '19.09.2025',
      'author' => 'Aura',
      'body' => 'Some world news 4'
    ]
  ]
?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/feature.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>