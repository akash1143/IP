<?php
include 'functions.php';
$recipes = getRecipesByCategory('dinner');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dinner Recipes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Dinner Recipes</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="add-recipe.php">Add Recipe</a>
        </nav>
    </header>

    <section>
        <?php if (empty($recipes)): ?>
            <p>No dinner recipes available.</p>
        <?php else: ?>
            <?php foreach ($recipes as $recipe): ?>
                <div class="recipe">
                    <h3><?php echo htmlspecialchars($recipe['name']); ?></h3>
                    <img src="images/<?php echo htmlspecialchars($recipe['image']); ?>" alt="<?php echo htmlspecialchars($recipe['name']); ?>">
                    <a href="recipe.php?id=<?php echo $recipe['id']; ?>">View Recipe</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2024 Food Recipe Website</p>
    </footer>
</body>
</html>
