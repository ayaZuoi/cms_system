<?php
include "../includes/db.php";

$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    if (!empty($_POST['category_name'])) {
        $categorytitle = $_POST['category_name'];
        $sql = "INSERT INTO categories (cat_title) VALUES ('$categorytitle')";
        $connection->query($sql);
        $message = "Category added successfully.";
    } else {
        $message = "Category name is not set.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit_edit_category'])) {
    if (!empty($_POST['edit_category_title'])) {
        $editedCategoryTitle = $_POST['edit_category_title'];

        if (isset($_GET['edit'])) {
            $cat_id = $_GET['edit'];
            $sql = "UPDATE categories SET cat_title = '$editedCategoryTitle' WHERE cat_id = $cat_id";
            $connection->query($sql);
            $message = "Category edited successfully.";
        } else {
            $message = "Category ID is not set.";
        }
    } else {
        $message = "Edited category title is not set.";
    }
}
?>


<!DOCTYPE html>
<html>
<style>
        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #0d6efd;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0d6efd;
        }
    </style>
</head>
<h1>Add Category</h1>
    <div class="container">
        <?php if (!empty($message)) : ?>
            <h3><?php echo $message; ?></h3>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="category_name">Category Name:</label>
                <input type="text" id="category_name" name="category_name">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Add Category">
            </div>
        </form>

        <?php 
        if (isset($_GET['edit'])) {
            $cat_id = $_GET['edit'];
            $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
            $edit_query = $connection->query($query);

            if ($edit_query->num_rows > 0) {
                $row = $edit_query->fetch_assoc();
                $cat_title = $row['cat_title'];
                ?>
                <form action="edit_category.php?edit=<?php echo $cat_id; ?>" method="POST">
                    <div class="form-group">
                        <label for="edit_category_title">Category edit:</label>
                        <input value="<?php echo $cat_title; ?>" type="text" class="form-control" name="edit_category_title">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit_edit_category" value="Edit Category">
                    </div>
                </form>
                <?php
            } else {
                $message = "Category not found.";
            }
        }
        ?>
    </div>
</body>
</html>