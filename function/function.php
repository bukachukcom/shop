<?php
function getCategories($mysqli)
{
    // Читаем категории товаров из базы данных
    $result = $mysqli->query("SELECT id, name FROM category");
    $categories = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $categories[$row['id']] = $row;
        }
    }

    return $categories;
}
