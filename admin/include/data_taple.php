<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable category
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <?php 
            include "../includes/db.php";
            ?>
            <thead>
                <th>id category</th>
                <th>title category</th>
                <th>delete</th>
                <th>edit</th> <!-- New column for editing -->
            </thead>
            <?php //find all categories
            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_categories)){
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<tr>";
                echo "<td>{$cat_id}</td>";
                echo "<td>{$cat_title}</td>";
                echo "<td><a href='index.php?delete={$cat_id}'>Delete</a></td>";
                echo "<td><a href='index.php?edit={$cat_id}'>Edit</a></td>"; 
                echo "</tr>";
            }
            ?>
          
          
            <?php 
            
            if(isset($_GET['delete'])){
                $the_cat_id = $_GET['delete'];

                $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                $delete_query = mysqli_query($connection, $query);
                header("location: index.php");
            }
            ?>
        </table>
    </div>
</div>