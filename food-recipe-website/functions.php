<?php
include 'config.php'; // Include the database connection

// Function to fetch recipes by category
function getRecipesByCategory($category) {
    global $conn;
    
    // Prepare SQL statement to fetch recipes based on category
    $sql = "SELECT * FROM recipes WHERE category = ?";
    
    // Prepare the SQL statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the category parameter
        $stmt->bind_param("s", $category);
        $stmt->execute();
        
        // Get the result of the query
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        // Output an error if the query fails
        die("Error preparing statement: " . $conn->error);
    }
}

// Function to fetch a specific recipe by ID
function getRecipeById($id) {
    global $conn;
    
    // Prepare SQL statement to fetch recipe by ID
    $sql = "SELECT * FROM recipes WHERE id = ?";
    
    // Prepare the SQL statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the ID parameter
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        // Get the result of the query
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    } else {
        // Output an error if the query fails
        die("Error preparing statement: " . $conn->error);
    }
}
?>
