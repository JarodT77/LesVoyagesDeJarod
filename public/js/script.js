function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active'); /* Active ou désactive le menu */
    }
// Autres fonctions ou code existant dans script.js

fetch('/docs/comments.json')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log(data); // Vérifiez les données dans la console
        // Appeler une fonction pour afficher les commentaires sur votre page
        afficherCommentaires(data);
    })
    .catch(error => {
        console.error('Il y a eu un problème avec la récupération des données :', error);
    });

function afficherCommentaires(comments) {
    const commentairesContainer = document.getElementById('commentaire'); // Assurez-vous d'avoir un élément avec cet ID
    commentairesContainer.innerHTML = ''; // Vider le conteneur avant d'ajouter les nouveaux commentaires

    comments.forEach(comment => {
        const commentElement = document.createElement('div');
        commentElement.innerHTML = `<strong>${comment.nom}</strong>: ${comment.commentaire}`;
        commentairesContainer.appendChild(commentElement);
    });
}
