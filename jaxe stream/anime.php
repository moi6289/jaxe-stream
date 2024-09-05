<?php
// Exemple de tableau de films
$films = [
    [
        'titre' => '1',
        'image' => './image/A.jpg',
        'lien' => './film/DEADPOOL_WOLVERINE.html'
    ],
    [
        'titre' => '2',
        'image' => './image/B.jpg',
        'lien' => '22d8fbc9959be439bd2f745afb773d2c.mp4'
    ],
    [
        'titre' => '3',
        'image' => './image/C.jpg',
        'lien' => '#'
    ],
    [
        'titre' => '4',
        'image' => './image/D.jpg',
        'lien' => './film/DEADPOOL_WOLVERINE.html'
    ],
    [
        'titre' => '5',
        'image' => './image/E.jpg',
        'lien' => '#'
    ]
];
$films2 = [
    [
        'titre2' => '6',
        'image2' => './image/F.jpg',
        'lien2' => './film/DEADPOOL_WOLVERINE.html'
    ],
    [
        'titre2' => '7',
        'image2' => './image/G.jpg',
        'lien2' => '22d8fbc9959be439bd2f745afb773d2c.mp4'
    ],
    [
        'titre2' => '8',
        'image2' => './image/H.jpg',
        'lien2' => '#'
    ],
    [
        'titre2' => '9',
        'image2' => './image/I.jpg',
        'lien2' => './film/DEADPOOL_WOLVERINE.html'
    ],
    [
        'titre2' => '10',
        'image2' => './image/J.jpg',
        'lien2' => '#'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaxe Stream</title>
   <link rel="shortcut icon" href="logo.ico" type="image/x-icon">

    <style>
       *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body{
    background: linear-gradient(100deg, #ff00b385, #3742a0 );
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    }
header{
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   padding: 20px 100px;
   background: rgba(255, 255, 255, 0.329);
   display: flex;
   justify-content: space-between;
   align-items: center;
   z-index: 99;
}
section{
    height: 100vh;
    font-family: Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
}

.navigateur a{
   position: relative;
   font-size: 1.1rem;
   color: #3742a0;
   text-decoration: none;
   font-weight: 500;
   margin-left: 40px;
   cursor: pointer;
}
.navigateur .connection{
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.329);
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1rem;
    color: #3742a0;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
}

.navigateur .connection:hover {
    background:rgba(255, 255, 255, 0.329) ;
    color: #3742a0;
}
.navigateur a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background:  #3742a0;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform .5s;

}
.navigateur a:hover::after{
    transform: scaleX(1);
}
.image{
    margin-left: -70px;
    width: 50px;
    height: 50px;
    outline: none;
}
H1{
    margin-left: -300px;
    outline: none;
    font-family: "Viner Hand ITC";
    color: rgb( 55, 66, 160 );
    text-align: left;

}



.film {
    background:rgba(255, 255, 255, 0.329);
    border: 2px solid #3742a0;
    border-radius: 5px;
    padding: 15px;
    margin: 10px;
    width: 250px; /* Largeur fixe pour les films */
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.film2 {
    background:rgba(255, 255, 255, 0.329);
    border: 2px solid #3742a0;
    border-radius: 5px;
    padding: 15px;
    margin: 10px;
    width: 250px; /* Largeur fixe pour les films */
    text-align: center;
    box-shadow: 0 2px 5px rgba(175, 133, 133, 0.1);
    margin-top: -250px;
}

.film img {
    max-width: 100%;
    border-radius: 5px;
}
.film2 img {
    max-width: 100%;
    border-radius: 5px;
}
.film h2 {
    font-size: 18px;
    margin: 10px 0;
    color: #3742a0;
}
.film2 h2 {
    font-size: 18px;
    margin: 10px 0;
    color: #3742a0;
}
.film a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    background:transparent ;
    color: rgb( 55, 66, 160 );
    padding: 10px;
    border: 2px solid rgba(255, 255, 255, 0.329);
    border-radius: 10px;
    transition: background 0.3s;
}
.film2 a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    background:transparent ;
    color: rgb( 55, 66, 160 );
    padding: 10px;
    border: 2px solid rgba(255, 255, 255, 0.329);
    border-radius: 10px;
    transition: background 0.3s;
}

.film a:hover {
    background:  rgba(255, 255, 255, 0.329);
}
.film2 a:hover {
    background:  rgba(255, 255, 255, 0.329);
}
.search-bar{
   width: 200px;
   height: 30px;
   background: rgba(255, 255, 255, 0.329);
   border:2px solid #ffffff52;;
   outline: none;
   border-radius: 6px;
   font-size: 1rem;
   color: rgba(47, 83, 201, 0.829);
   text-emphasis-style: unset;
   padding: 15px;
   margin: 10px;
 }
 footer{
    position: fixed; /* Reste en bas de la page */
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(255, 255, 255, 0.329); /* Fond semi-transparent */
    color: #3742a0; /* Couleur du texte */
    text-align: center; /* Centrer le texte */
    padding: 10px 0; /* Espacement autour du texte */
    font-size: 0.9rem; /* Taille de police légèrement plus petite */
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Ombre pour un léger relief */
    z-index: 0;
}

    </style>
</head>
<body>
    <header>
        <img src="logo.png" class="image" alt="Logo Jaxe Stream">
        <h1>Jaxe Stream</h1>
        <nav class="navigateur">
      <input type="text" placeholder="Rechercher un film..." class="search-bar"> 
        <a href="index.php">Accueil</a>
            <a href="film.php">Films</a>
            <a href="anime.php">Animés</a>
            <a href="serie.php">Séries</a>
        </nav>
    </header>
    <footer>
<p>&copy; 2024 LES FILMS. Tous droits réservés.</p>
</footer>

    <main class="body">
        <section class="films">
            <?php foreach ($films as $film): ?>
                <div class="film">
                    <img src="<?php echo $film['image']; ?>" alt="<?php echo $film['titre']; ?>">
                    <h2><?php echo $film['titre']; ?></h2>
                    <a href="<?php echo $film['lien']; ?>" download>Télécharger</a>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="films2">
            <?php foreach ($films2 as $film): ?>
                <div class="film2">
                    <img src="<?php echo $film['image2']; ?>" alt="<?php echo $film['titre2']; ?>">
                    <h2><?php echo $film['titre2']; ?></h2>
                    <a href="<?php echo $film['lien2']; ?>" download>Télécharger</a>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    
    <script>
            document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector(".search-bar");
    const films = document.querySelectorAll(".film, .film2"); // Sélectionne tous les films, y compris ceux de la seconde section

    searchBar.addEventListener("input", function() {
        const query = searchBar.value.toLowerCase();

        films.forEach(film => {
            const title = film.querySelector("h2").textContent.toLowerCase();
            // Afficher ou masquer le film en fonction de la recherche
            film.style.display = title.includes(query) ? "" : "none";
        });
    });
});
    </script>
    
</body>
</html>