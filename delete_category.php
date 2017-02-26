<?php
require_once('database.php');
$categoryName = filter_input(INPUT_POST, 'categoryName, FILTER_VALIDATE_INT);

// Delete the categoryName from the database
if ($categoryName != false) {
    $query = 'DELETE FROM categories_guitar1
              WHERE categoryName = :categoryName';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryName', $categoryName);
    $success = $statement->execute();
    $statement->closeCursor();
}

// Display the Product List page
include('category_list.php');
