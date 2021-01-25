function showModal() {
    const $modal = document.querySelector(".hiddenModal");
    $modal.classList.replace("hiddenModal","modalComponent"); 
    }

function hideModal() {
    const $modal = document.querySelector(".modalComponent");
    $modal.classList.replace("modalComponent","hiddenModal"); 
    }
   