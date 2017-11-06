<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <?php
              $query = "SELECT * FROM navigation"; 
              $query_select_navigation = mysqli_query($connection, $query);

              

               while ($row = mysqli_fetch_assoc($query_select_navigation)) {
                 $nav_title = $row['nav_title'];

                 echo "<li class='nav-item'><a class='nav-link' href='#'>{$nav_title}</a></li>";
               }
              
            ?>
            
          </ul>
        </div>
      </div>
    </nav>