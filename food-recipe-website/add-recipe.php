<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $image = $_FILES['image']['name'];
    
    // Move the uploaded image to the "images" folder
    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);

    if (addRecipe($name, $category, $ingredients, $instructions, $image)) {
        echo "Recipe added successfully.";
    } else {
        echo "Failed to add recipe.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Recipe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Add a New Recipe</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="add-recipe.php">Add Recipe</a>
        </nav>
    </header>

    <section>
        <form action="add-recipe.php" method="post" enctype="multipart/form-data">
            <label for="name">Recipe Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
            </select>
            <label for="ingredients">Ingredients:</label>
            <textarea id="ingredients" name="ingredients" required></textarea>
            <label for="instructions">Instructions:</label>
            <textarea id="instructions" name="instructions" required></textarea>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" required>
            <button type="submit">Add Recipe</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Food Recipe Website</p>
    </footer>
</body>
</html>
