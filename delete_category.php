<?php
require_once('database.php');

$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the categoryName from the database
if ($categoryName != false) {
    $query = 'DELETE FROM categories_guitar1
              WHERE categoryName = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $category_id);
    $success = $statement->execute();
    $statement->closeCursor();
}

// Display the Product List page
include('category_list.php');
