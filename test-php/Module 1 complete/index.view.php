<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styling/php-test.css">
    <title>Document</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($filteredBooks as $book) :  ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>