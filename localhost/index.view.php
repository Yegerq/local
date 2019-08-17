<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

</head>

<body>
  <nav>
      <ul>
        <li><a href="/about.php">About page</a></li>
        <li><a href="contact.php">Contact page</a></li>
      </ul>
  </nav>
  <h1>My tasks</h1>
<ul>
        <?php foreach ($tasks as $task) : ?>
                 <li>
                   <?php if ($task->completed) : ?>
                     <strike> <?= $task->description; ?> </strike>
                   <?php else: ?>

                     <?= $task->description; ?>
                  <?php endif; ?>
                 </li>
        <?php endforeach; ?>

</ul>


</body>
</html>
