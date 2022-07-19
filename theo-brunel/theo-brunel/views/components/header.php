<div class="header">
    <div><img src="images/img-profil.png?v1" alt="Photo de profil de Théo" height="400" width="410"></div>
    <h1>Théo <br>Brunel</h1>
    <div class="burger">
        <span></span>
    </div>
    <div class="menu-items">
        <ul>
            <li><a href="?page=<?php echo ACCUEIL ?>">Accueil</a></li>
            <li><a href="?page=<?php echo LIVRE ?>">Livre d'or</a></li>
            <li><a href="?page=<?php echo RESEAUX_SOCIAUX ?>">Réseaux sociaux</a></li>
        </ul>
    </div>
</div>
<script>
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.menu-items');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
    })

</script>