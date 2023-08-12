<!DOCTYPE html>
<html lang="ar-en">
   
    <body>
        <!-- Responsive navbar-->
       <?php 
       include "../includes/header.php";
       ?>
        <!-- Page header with logo and tagline-->
       <?php 
       include "../includes/nav.php"
       ?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
             
                <?php
    include "../includes/db.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form is submitted
        if(isset($_POST['search'])){
            $search = mysqli_real_escape_string($connection, $_POST['search']); // sanitize input
            $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
            $search_query = mysqli_query($connection, $query);
            if(!$search_query){
                die("QUERY FAILED: " . mysqli_error($connection)); // display error message
            }
            $count = mysqli_num_rows($search_query);
            if ($count == 0){
                echo "<h1>No results found</h1>";
            } else {
                while($row = mysqli_fetch_assoc($search_query)){
                    $img = $row['post_img'];
                    ?>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card mb-4">
                                <div class="row g-2">
                                    <div class="col-md-20">
                                        <div class="card-body">
                                            <img src="images/<?php echo $img;?>" class="img-fluid" alt="">
                                            <div class="small text-muted"><?php echo $row['post_date']; ?></div>
                                            <h2 class="card-title h4"><?php echo $row['post_title']; ?></h2>
                                            <p class="card-text"><?php echo substr($row['post_content'], 0, 200) . '...'; ?></p>
                                            <a class="btn btn-primary" href="#!">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }
?>

</div>

    
</div>
                              
                          
                            
                            <!-- Blog post-->
                           
                      
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <!----------------------------------------------------------------------------------------->




                <div class="col-lg-7">

<!-- Search widget-->
<!--------------------------------------------------------------->
<div class="card mb-4">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="card-header">Search</div>
        <div class="card-body">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter post name.." aria-describedby="button-search" name="search"/>
                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
            </div>
        </div>
    </form>
</div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                <?php
                                include "../includes/db.php";
                             $query ="SELECT * FROM categories ";
                             $select_all_categories_query=mysqli_query($connection,$query);
                           echo '<ul class="list-unstyled mb-0">';
                          while($row = mysqli_fetch_assoc($select_all_categories_query)){
                           $cat_title = $row['cat_title'];
                           echo '<li><a href="#!">' . $cat_title . '</a></li>';
                               }
                        echo '</ul>';
                            ?>
                              
                                    
                            
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
















            </div>
        </div>
        <!-- Footer-->
        <?php 
        include "../includes/footer.php"
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
