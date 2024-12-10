function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active'); /* Active ou désactive le menu */
}

// Récupération des commentaires depuis le fichier JSON
fetch('/public/comments.json')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log(data); // Vérifiez les données dans la console
        afficherCommentaires(data);
    })
    .catch(error => {
        console.error('Il y a eu un problème avec la récupération des données :', error);
    });

// Fonction pour afficher les commentaires dans la page
function afficherCommentaires(comments) {
    const commentairesContainer = document.getElementById('commentaire');
    commentairesContainer.innerHTML = ''; // Vider le conteneur avant d'ajouter les nouveaux commentaires

    comments.forEach(comment => {
        // Créer une div pour chaque commentaire avec la classe "comment"
        const commentElement = document.createElement('div');
        commentElement.classList.add('comment');
        
        // Vous pouvez personnaliser la structure HTML du commentaire
        commentElement.innerHTML = `
            <p class="author"><strong>${comment.nom}</strong></p>
            <p class="content">${comment.commentaire}</p>
        `;

        // Ajouter le commentaire au conteneur
        commentairesContainer.appendChild(commentElement);
    });
}


