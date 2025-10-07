<?php
$posts = [
    [
      'title' => 'U.S news1',
      'published' => '16.09.2025',
      'author' => 'Riko',
      'body' => 'Some U.S news 1'
    ],
    [
      'title' => 'U.S news1',
      'published' => '17.09.2025',
      'author' => 'Riks',
      'body' => 'Some U.S news 2'
    ],
    [
      'title' => 'U.S news1',
      'published' => '18.09.2025',
      'author' => 'Sigma',
      'body' => 'Some U.S news 3'
    ],
    [
      'title' => 'U.S news1',
      'published' => '19.09.2025',
      'author' => 'Aura',
      'body' => 'Some U.S news 4'
    ]
  ]
?>

<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container">
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