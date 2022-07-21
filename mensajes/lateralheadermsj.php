<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Click</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="../busqueda.php">
                <i class='bx bx-search-alt'></i>
                <span class="links_name">Buscar</span>
            </a>
            <span class="tooltip">Buscar</span>
        </li>
        <li>
            <a href="../home.php">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Menu</span>
            </a>
            <span class="tooltip">Menu</span>
        </li>
        <li>
            <a href="../perfil.php?username=<?php echo $_SESSION['username']; ?>">
                <i class='bx bx-user'></i>
                <span class="links_name">Perfil</span>
            </a>
            <span class="tooltip">Perfil</span>
        </li>
        <li>
            <a href="mensajes_recibidos.php">
                <i class='bx bx-chat'></i>
                <span class="links_name">Mensajes</span>
            </a>
            <span class="tooltip">Mensajes</span>
        </li>
        
        <li>
            <a href="../seleccionarch.php">
                <i class='bx bx-folder'></i>
                <span class="links_name">Subir</span>
            </a>
            <span class="tooltip">Subir</span>
        </li>
        <li>
            <a href="../categorias/categorias.php">
                <i class='bx bx-bookmarks'></i>
                <span class="links_name">Categorias</span>
            </a>
            <span class="tooltip">Categorias</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Configuracion</span>
            </a>
            <span class="tooltip">Configuracion</span>
        </li>
         <?php
        require "../conexion.php";
        $SQLADMIN = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "' AND admin = 2");
        $ROWADMIN = $SQLADMIN->fetch_array();

        if (isset($ROWADMIN)) { ?>
        <li>
            <a href="../administrador.php">
                <i class='bx bx-pyramid'></i>
                <span class="links_name">Administrador</span>
            </a>
            <span class="tooltip">Administrador</span>
        </li>

        <?php } ?>
        <li class="profile">
            <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                <div class="name_job">
                    <div class="name">
                        <a href="../perfil.php?username=<?php echo $_SESSION['username']; ?>"
                            style="color:white"><?php echo $_SESSION['username']; ?></a>
                    </div>
                    <div class="job"><?php datos_usuario($_SESSION['id'], 'name'); ?></div>
                </div>
            </div>

            <a href="../logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
        </li>
    </ul>
</div>
<script>
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
}
</script>