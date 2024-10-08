<?php
include __DIR__ . '/../config/config.php';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nom = htmlspecialchars($_POST['nom']);
    $commentaire = htmlspecialchars($_POST['commentaire']);

    // Correction de la requête SQL en supprimant la virgule
    $query = "INSERT INTO avis_khmer (nom, commentaire) VALUES (:nom, :commentaire)";
    $stmt = $bdd->prepare($query);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':commentaire', $commentaire);

    if ($stmt->execute()) {
        header('Location: /docs/Cambodge_page.php');
        exit;
    } else {
        $message = "Erreur lors de la soumission de votre avis.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog voyage de Jarod</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="container-header">
                <div class="burger" onclick="toggleMenu()">&#9776;</div>
                <img src="images/Logo.png" class="header-logo">
                 
                    <ul class="nav-links">
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="destination_page.html">Destination</a></li>
                        <li><a href="">A Propos</a></li>
                    </ul>
            </div>
        </nav>
    </header>
    <div class="container-page">
        <div class="container-content">
            <h2>Mon voyage au Cambodge</h2>
            <h3>Une Semaine au Cambodge : Que Faire ?</h3>
            <p>Durant une semaine inoubliable, j'ai eu la chance de découvrir l'un des plus beaux joyaux d'Asie : le Cambodge. Entre la capitale vibrante de Phnom Penh et la mythique Siem Reap, célèbre pour ses majestueux temples d'Angkor, ce voyage m’a offert une première immersion en Asie à couper le souffle. J’y ai découvert une culture fascinante, marquée par son histoire, tout en étant entouré de personnes chaleureuses, souriantes et incroyablement accueillantes. Voici un aperçu de ce que j’ai vécu et comment vous pouvez organiser votre propre aventure.</p>
            <h3>Organisation du voyage</h3>
            <p>Je suis parti au Cambodge début mars 2024, une des meilleures périodes pour visiter cette région d’Asie, lorsque le soleil brille encore quotidiennement avant l’arrivée des pluies à partir de mai. Pour entrer dans le pays, il est obligatoire de se munir d’un visa. J’ai effectué ma demande directement sur le site gouvernemental cambodgien, au prix de 30$ pour une validité de 30 jours. Le processus est simple et rapide, et c’est l’option la moins chère que j’ai trouvée.
            Pour le vol, j’ai voyagé avec Singapore Airlines pour environ 400$, avec une escale de 2h à Singapour, pour un total de 14h de vol. J’ai eu de la chance avec ce prix, car les tarifs peuvent être plus élevés selon la période.</p>
            <h3>Une fois à Phnom Penh</h3>
            <p>À l’arrivée à l’aéroport de Phnom Penh, je recommande fortement l’application GRAB, l’équivalent asiatique d’Uber. Elle permet d’appeler un tuk-tuk à un prix raisonnable, et surtout de payer par carte via l’application, évitant ainsi les négociations parfois compliquées avec les chauffeurs. Pour tout ce qui concerne l’achat de cartes SIM ou le change de monnaie, je vous conseille d’attendre d’être en ville : les tarifs sont beaucoup plus abordables qu’à l’aéroport.
            Concernant les paiements, beaucoup de commerces à Phnom Penh acceptent la carte bancaire, donc inutile de changer de grosses sommes. Prévoir un peu de liquide reste utile pour les marchés, musées et certains lieux plus traditionnels.</p>
            <h3>Hébergement</h3>
            <p>Le Cambodge offre un excellent rapport qualité-prix pour les hébergements. Il est facile de trouver un logement bien équipé pour seulement 10$ la nuit. Pour ma part, j’ai opté pour un appartement à 30$/nuit avec une vue imprenable sur la ville, incluant une piscine et une salle de sport dans la résidence. Le confort est bien là, sans se ruiner!</p>
            <h3>Que faire à Phnom Penh ?</h3>
            <p>Phnom Penh est une ville fascinante, où le passé et le présent se côtoient dans un mélange captivant de tradition et de modernité. Voici quelques incontournables à ne pas manquer :<br>
                •	Le Palais Royal : Résidence officielle du roi, c'est un site incontournable pour admirer l'architecture khmère.<br>
                •	Le Quai Sisowath : Une promenade paisible le long du Tonlé Sap, où vous pouvez également faire une balade en bateau au coucher du soleil.
                •	Le Musée du Génocide Tuol Sleng (S-21) : Pour comprendre l'histoire tragique des Khmers rouges.<br>
                •	Les marchés de nuit (Night Markets) : Découvrez les saveurs locales et régalez-vous avec des plats authentiques à petits prix.<br>
                J'ai passé 4 nuits à Phnom Penh, ce qui, à mon avis, est suffisant pour découvrir la ville sans se presser. J'ai été impressionné par le contraste entre la modernité, avec ses gratte-ciels qui dominent le paysage urbain, et le charme traditionnel de ses marchés et temples.
            </p>
        </div>
            <div><img src="images/Phnom Penh1.jpg" class="image-page"></div>
    </div>
    </div>
    <div class="container"> 
    <h3>Mes Expériences effectue</h3>
    <p><b>Flâner dans les rues</b> est l’une des meilleures façons de découvrir Phnom Penh. La ville regorge de vendeurs ambulants proposant toutes sortes de mets délicieux. Un incontournable : une noix de coco fraîche ou un jus de canne à sucre pour moins d'1$, parfait pour se rafraîchir tout en se baladant.Que vous soyez amateur d’histoire, de culture ou simplement à la recherche d’une destination qui allie modernité et authenticité, Phnom Penh saura vous captiver.Mon séjour ici fut marqué par des moments intenses, et j'espère que vous aurez autant de plaisir à découvrir cette ville fascinante. Si vous continuez votre voyage vers Siem Reap, préparez-vous à être encore plus émerveillé par les temples d'Angkor, mais ça, c'est une autre histoire que je vous raconterai bientôt !</p>
    <b>Découverte du Palais Royal et du Quai Sisowath à Phnom Penh</b>
    <p>Après une agréable balade en ville, je suis passé devant le <b>Palais Royal de Phnom Penh</b>. Bien que je n’aie pas ressenti le besoin de visiter l’intérieur, j’ai quand même pu admirer la superbe architecture khmère qui entoure ce monument emblématique. Si vous êtes curieux, sachez que l’entrée coûte une dizaine de dollars, et à l’intérieur, vous pourrez découvrir des stupas, des pagodes, ainsi que diverses expositions retraçant l’histoire du pays.<br>
    Juste à côté du Palais Royal se trouve le <b>Quai Sisowath</b>, une large promenade piétonne qui longe le <b>Tonlé Sap</b>. Bordé de palmiers et d’arbustes, c’est l’un des lieux les plus animés et incontournables de Phnom Penh. Le Quai est parsemé de cafés, restaurants, boutiques et autres points d’intérêt où vous pourrez vous détendre, déguster des plats locaux ou acheter des souvenirs. Si vous cherchez un coin agréable pour vous relaxer, c’est ici qu’il faut venir.<br>
    Je vous recommande particulièrement de vous y rendre en fin de journée, car c’est à ce moment que le quai prend véritablement vie. Les locaux s’y retrouvent pour manger en famille, se balader, faire du sport ou simplement profiter de l’ambiance du soir. Les lumières de la ville illuminent l’endroit, et vous verrez des bateaux naviguer sur le fleuve, décorés de lumières colorées qui créent une atmosphère magique.<br>
    Si vous en avez envie, vous pouvez aussi profiter d’une croisière d’environ une heure sur le Tonlé Sap pour seulement 5$. Vous aurez une vue magnifique sur Phnom Penh qui s’illumine à la nuit tombée, et certains bateaux offrent même la possibilité de dîner à bord, pour une expérience encore plus mémorable.</p>
    <b>Les Marches a Phnom Penh</b>
    <p>Après ma visite du Palais Royal, je me suis rendu dans l’un des lieux les plus emblématiques de Phnom Penh :<b>le marché central Psar Thmei</b>. Ce vaste hall est un véritable centre où l’on trouve de tout : bijoux, souvenirs, vêtements, et bien plus encore. C’est aussi un marché coloré avec de nombreux étals offrant fruits, légumes, viandes, poissons et autres produits alimentaires locaux.
    L’ambiance y est vivante, les locaux viennent s’y approvisionner à des prix très abordables, ce qui en fait un excellent endroit pour s’immerger dans la vie quotidienne cambodgienne. Si vous avez un petit creux, vous y trouverez également plusieurs stands de street food, parfaits pour goûter à des spécialités locales tout en continuant à explorer ce lieu animé.
    </p>
    <div class="image-content">
        <img src="images/Phnom Penh4.jpg">
    </div>
    <b>Mangez dans Les NightMarket</b>
    <p>Pour conclure, ne manquez surtout pas les Night Markets, véritables incontournables lors de toute visite en Asie. Ces marchés nocturnes sont l’endroit idéal pour déguster de délicieux plats locaux et acheter des souvenirs artisanaux, le tout dans une ambiance animée. Certains soirs, vous aurez même la chance d’assister à des spectacles sur scène, ajoutant une touche culturelle à votre expérience.<br>
    Parmi les Night Markets que j’ai visités, le Phnom Penh Night Market est le plus célèbre. Situé à deux pas du Quai Sisowath, il est très prisé par les locaux et les touristes pour son atmosphère dynamique et sa grande variété de stands de nourriture. Si vous cherchez quelque chose de plus tranquille, je vous recommande le Night Market No.05, un peu plus éloigné du centre-ville. Ce marché est plus calme, mais tout aussi charmant, idéal pour une soirée détendue en dehors de l’agitation du centre.<br>
    C’est dans ces marchés que vous pourrez vraiment découvrir et savourer la véritable cuisine cambodgienne, une expérience à ne pas manquer !</p>
    <p>En conclusion, Phnom Penh est une ville fascinante où l’histoire, la culture et la modernité se mêlent harmonieusement. Entre ses monuments emblématiques comme le Palais Royal, ses marchés animés tels que le Psar Thmei et ses Night Markets incontournables, la capitale cambodgienne offre une expérience authentique. Que vous soyez attiré par ses rues dynamiques, sa cuisine locale ou ses paysages urbains, Phnom Penh vous laissera des souvenirs inoubliables et une belle introduction à la richesse du Cambodge.</p>
    <div class="image-content">
        <img src="images/Phnom Penh3.jpg">
    </div>
</div>
<div class="container-page">
    <div class="container-content">
        <h3>La decouverte de Siem riep</h3>
        <p>
            Siem Reap est bien plus qu'une simple porte d'entrée vers les temples d'Angkor. C’est une ville pleine de charme, où l’histoire et la modernité cohabitent, et elle a été pour moi l'un des moments forts de mon voyage en Asie. Pendant 4 nuits, j'ai eu l'occasion d'explorer cette ville, ses merveilles culturelles et ses trésors naturels. Siem Reap est une destination qui saura vous captiver, que vous soyez amateur d’histoire, d’aventure ou de découvertes culturelles.
        </p>
        <h3>Arrivée à Siem Reap</h3>
        <p>Après avoir quitté Phnom Penh, j’ai pris un bus de nuit pour rejoindre Siem Reap. Le trajet dure environ 6 heures et est relativement confortable, surtout si vous réservez via des plateformes comme<b>Bookaway ou 12goAsia</b> . Ces sites facilitent grandement la planification de vos déplacements, et j’ai trouvé cette méthode pratique et économique.</p>
        <h3>Découvrir la ville de Siem Reap</h3>
        <p>La ville de <b>Siem Reap</b> est avant tout connue pour être le point de départ des excursions vers les temples d’Angkor, mais elle a bien plus à offrir. Siem Reap est une ville dynamique en plein développement, grâce à l’afflux de touristes venus découvrir ces vestiges historiques. Vous pourrez flâner dans les rues animées bordées de boutiques artisanales, de galeries d’art, et de nombreux cafés et restaurants. La ville a su allier son côté traditionnel avec une ambiance moderne et conviviale.<br>
            Le long du canal qui traverse la ville, vous trouverez des restaurants, bars et cafés animés tout au long de la journée et jusque tard dans la nuit. C’est l’endroit idéal pour s’imprégner de l’ambiance locale et découvrir la vie nocturne cambodgienne.<br>
            <b>Pub Street</b>, l’une des rues les plus célèbres de Siem Reap, est un passage obligé. Ce quartier vibrant est le centre névralgique des noctambules, avec ses nombreux bars, clubs et restaurants. L’atmosphère y est particulièrement festive, surtout après minuit, où la rue devient le terrain de jeu des jeunes fêtards venus des quatre coins du monde. Même si vous ne souhaitez pas faire la fête, je vous recommande d’y faire un tour, ne serait-ce que pour profiter de l'ambiance et des lumières colorées qui illuminent les rues.<br>
            Si vous cherchez une expérience plus calme et culturelle, je vous conseille de visiter <b>les Artisans d’Angkor</b>. Cet atelier, situé en plein cœur de la ville, est un lieu où vous pourrez découvrir l’art du tissage de la soie et d’autres techniques artisanales cambodgiennes. Vous y verrez des artisans locaux travailler avec passion pour créer des écharpes et des tissus à la main, selon des méthodes ancestrales. Des visites guidées gratuites vous expliqueront les différentes étapes de la fabrication, et vous pourrez acheter des produits artisanaux, allant de la soie aux sculptures sur bois, tout en soutenant les artisans locaux. C’est une expérience enrichissante qui vous permettra de mieux comprendre l’importance de l’artisanat dans la culture cambodgienne.
            </p>
            <div class="image-content">
                <img src="images/PubStreet.jpg">
            </div>
        <h3>Les temples d'Angkor : Un passage incontournable</h3>
        <p>Bien sûr, la visite des temples d'Angkor est l'attraction phare de Siem Reap. Ces temples majestueux, classés au patrimoine mondial de l'UNESCO, sont un témoignage unique de la grandeur de la civilisation khmère. Le plus célèbre est Angkor Wat, un chef-d'œuvre d’architecture et le plus grand temple religieux du monde. Se promener dans ses vastes galeries ornées de bas-reliefs est une expérience inoubliable.<br>
            En plus d’Angkor Wat, d’autres temples comme Bayon, célèbre pour ses tours ornées de visages sculptés, et Ta Prohm, rendu célèbre par les arbres gigantesques qui se sont fondus dans la pierre, valent le détour. Pour visiter ces temples, l’entrée coûte environ 35$ pour une journée, mais je vous recommande de consacrer au moins deux jours pour profiter pleinement de la richesse des lieux.<br>
            En ce qui concerne les déplacements entre les temples, vous pouvez soit prendre un tuk-tuk, soit louer un scooter. J'ai personnellement opté pour le scooter, un moyen de transport flexible et abordable, qui permet de visiter les temples à son propre rythme.<br>
            La visite des temples ne se résume pas seulement à admirer des ruines anciennes. C’est une immersion dans l’histoire, l’architecture et la spiritualité khmères. Chaque temple a son propre caractère, son propre charme, et explore des facettes différentes de cette civilisation millénaire.</p>
            <div class="image-content">
                <img src="images/AngkorWat.png">
            </div>
            <h3>Explorer la campagne autour de Siem Reap</h3>
            <p>En dehors des temples, Siem Reap est entourée de magnifiques paysages ruraux. J’ai consacré une journée à la découverte des villages environnants, où l’on peut observer la vie quotidienne des habitants et admirer les champs de rizières qui s’étendent à perte de vue. Ces paysages verdoyants, ponctués de collines et de montagnes, offrent une véritable bouffée d’air frais après les visites des temples.<br>
            Si vous aimez la nature, ne manquez pas de grimper sur l’une des collines environnantes pour admirer un coucher de soleil spectaculaire sur la campagne cambodgienne. Ces moments en dehors de la ville sont parfaits pour se ressourcer et apprécier la beauté naturelle de cette région</p>
            <div class="image-content">
                <img src="images/Paysage.png">
            </div>
            <h3>Conclusion : Siem Reap, une destination à part entière</h3>
            <p>Siem Reap est bien plus qu'un simple point de départ pour les temples d'Angkor. C’est une ville qui allie parfaitement tradition et modernité, avec une culture vibrante, une scène artistique dynamique et une nature environnante à couper le souffle. Que vous soyez amateur de découvertes culturelles, passionné d’histoire, ou simplement en quête de nouvelles aventures, Siem Reap saura vous séduire par son authenticité et sa diversité.</p>
        </div>
    </div> 
    <div class="comment-section">
    <h2>Commentaires</h2>

    <!-- Liste des commentaires existants -->
    <div class="comments-list" id="commentaire">
    </div>
<!-- Formulaire pour laisser un commentaire -->
    <div class="comment-form">
        <h3>Laisser un commentaire</h3>
        <form id="commentForm" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="commentaire">Commentaire :</label>
            <textarea id="commentaire" name="commentaire" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>
<footer>
    <div class="container-footer">
        <div class="content-footer">
            <h3>A propos de moi ?</h3>
        <p>Je m'appelle Jarod, j'ai 26 ans et je suis un passionné de voyages. Découvrir de nouveaux paysages, explorer des endroits inconnus, et m'immerger dans des cultures différentes sont pour moi des sources d'inspiration et d'émerveillement. J'aime l'idée de partir à l'aventure, que ce soit en parcourant des villes historiques, des contrées lointaines ou en profitant de la nature sauvage. Chaque destination que je visite m’apporte de nouvelles perspectives et enrichit ma vision du monde. Voyager est pour moi une façon de sortir de ma zone de confort, de faire des rencontres enrichissantes, et de créer des souvenirs uniques. C’est une véritable passion qui me pousse constamment à aller à la découverte de ce que le monde a de plus beau à offrir.</p>
     </div>
    </div>  
</footer>
<script src="/docs/js/script.js"></script>
</body>
</html>