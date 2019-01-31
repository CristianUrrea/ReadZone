<div id="listas" class="col s12 m12 l8 offset-l2">
    <div class="row">
        <button id="btn-modal-add-list" data-target="modal1" class="btn modal-trigger">Crear lista</button>
    </div>
    <?php
    if (isset($_SESSION['username'])) {
      $user = $_SESSION['username'];
      $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
      if (mysqli_num_rows($query) > 0) {
          while ($row = mysqli_fetch_assoc($query)) {
            $id_user = $row['id_user'];
            //Mira esto para mañana por la mañana
            $query2 = mysqli_query($conn, "SELECT nombre_lista, id_book FROM List_books WHERE id_user = '$id_user' GROUP BY nombre_lista");
            if (mysqli_num_rows($query2) > 0) {
                while ($row2 = mysqli_fetch_assoc($query2)) {
      ?>
        <div class="row">
            <button type="button" name="button" id="<?php echo $row2['nombre_lista']?>">
                <?php echo $row2['nombre_lista'];?>
            </button>
        </div>
        <div class="row">
            <div id="div-content-recomendations-title" class="col s12 m12">
                <ul id="example2" class="cards-container">

                    <!-- <div id="div-content-recomendations-gallery" class="col s12 m12 l12 colgallery js-flickity" data-flickity-options='{ "wrapAround": true }'> -->

                    <?php
                      $id_book = $row2['id_book'];
                      $query3 = mysqli_query($conn, "SELECT imagen, id_book FROM books WHERE id_book = '$id_book'");
                      if (mysqli_num_rows($query3) > 0) {
                        while ($row3 = mysqli_fetch_assoc($query3)) {
                          ?>

                        <!-- <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">

                                    <a href="contenido.php?id_book=<?php echo $row3['id_book']; ?>"><img class="center" src="<?php echo $row3['imagen']; ?>" height="250px"></img>
                                    </a>
                                </div>
                                <div class="card-content center">
                                    <p id="div-content-recomendations-gallery-title-book"><?php //echo $row3['titulo']; ?></p>
                                </div>
                            </div>
                        </div> -->
                        <li>
                            <div class="card sticky-action">
                                <div class="card-image center">
                                    <form method="post">
                                        <a href="contenido.php?id_book=<?php echo $row3['id_book']; ?>"><img class="center" src="<?php echo $row3['imagen']; ?>" height="250px"></img>
                                    </a>
                                    </form>
                                </div>
                                <div class="card-content">
                                    <p id="p-div-title-book" style="font-size: 12px;">
                                        <?php //echo $row3['titulo']; ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php
                  }
                  }
          ?>
                </ul>
                <!-- </div> -->

            </div>
        </div>

        <?php
  }
}
}
}
}
    ?>
</div>
