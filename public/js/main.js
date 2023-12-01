window.addEventListener("DOMContentLoaded", (e) => {
  console.log("egg");

  function openModal(musicInfo) {
    var modal = document.getElementById("musicModal");
    var modalContent = document.getElementById("modalContent");

    // Mettez à jour le contenu du modal avec les informations de la musique
    modalContent.innerHTML = `
        <h2>${musicInfo.name}</h2>
        <p>Description: ${musicInfo.description}</p>
        <p>Catégorie: ${musicInfo.category}</p>
        <p>Auteur: ${musicInfo.author}</p>
        <p>Reviews: ${musicInfo.reviews}</p>
    `;

    modal.style.display = "block";
  }

  function closeModal() {
    var modal = document.getElementById("musicModal");
    modal.style.display = "none";
  }

  // Ajoutez cette fonction pour ouvrir le modal avec les informations de la musique actuelle
  function showMusicInfo() {
    var musicInfo = {
      name: "Nom de la Musique 1",
      description: "Description de la Musique 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      category: "Rock",
      author: "Artiste 1",
      reviews: 15,
      // Ajoutez d'autres propriétés au besoin
    };

    openModal(musicInfo);
  }

  let musiques = document.querySelectorAll(".music-card");
  musiques.forEach((musiqueCard) => {
    musiqueCard.addEventListener("click", (e) => {
      showMusicInfo();
    });
  });
  document.querySelector(".close").addEventListener("click", (ev) => {
    closeModal();
  });
});
