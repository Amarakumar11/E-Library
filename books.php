<?php
include('db.php');

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

echo '<div class="books-list">';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<h3>' . $row['title'] . '</h3>';
        echo '<p>Author: ' . $row['author'] . '</p>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<a href="download.php?book_id=' . $row['id'] . '">Download</a>';
        echo '</div>';
    }
} else {
    echo "No books available";
}
echo '</div>';

$conn->close();
?>
