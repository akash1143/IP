<?php
include 'functions.php';

if (isset($_GET['id'])) {
    $recipe = getRecipeById($_GET['id']);
} else {
    die("Recipe not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($recipe['name']); ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($recipe['name']); ?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="add-recipe.php">Add Recipe</a>
        </nav>
    </header>

    <section>
        <img src="images/<?php echo htmlspecialchars($recipe['image']); ?>" alt="<?php echo htmlspecialchars($recipe['name']); ?>">
        <h2>Ingredients</h2>
        <p><?php echo nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>
        <h2>Instructions</h2>
        <p><?php echo nl2br(htmlspecialchars($recipe['instructions'])); ?></p>
    </section>

    <footer>
        <p>&copy; 2024 Food Recipe Website</p>
    </footer>
</body>
</html>
