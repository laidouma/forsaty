// Fonction pour changer la langue
function changeLanguage(lang) {
    // Charger le fichier JSON en fonction de la langue
    fetch(`langues/${lang}.json`)
        .then(response => response.json())
        .then(data => {
            // Mettre à jour le titre de la page
            document.getElementById("page-title").innerText = data.header.accueil;

            // Sections
            document.getElementById("about-title").innerText = data.sections.about.title;
            document.getElementById("about-content").innerText = data.sections.about.content;

            // Services
            document.getElementById("services-title").innerText = data.sections.services.title;
            document.getElementById("service1").innerText = data.sections.services.service1;
            document.getElementById("service2").innerText = data.sections.services.service2;
            document.getElementById("service3").innerText = data.sections.services.service3;

            // Footer
            document.getElementById("footer").innerText = data.sections.footer;
        })
        .catch(error => console.log('Erreur de chargement de la langue:', error));
}
