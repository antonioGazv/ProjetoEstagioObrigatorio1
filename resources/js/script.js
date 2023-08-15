const moreInfoBtns = document.querySelectorAll(".more-info-btn");
const contentMoreInfos = document.querySelectorAll(".content-more-info");
const arrowDowns = document.querySelectorAll(".arrow-down");
const arrowUps = document.querySelectorAll(".arrow-up");

moreInfoBtns.forEach((btn, index) => {
    btn.addEventListener("click", function () {
        if (
            contentMoreInfos[index].style.display === "none" &&
            arrowUps[index].style.display === "none"
        ) {
            arrowUps[index].style.display = "block";
            contentMoreInfos[index].style.display = "block";
            arrowDowns[index].style.display = "none";
        } else {
            contentMoreInfos[index].style.display = "none";
            arrowUps[index].style.display = "none";
            arrowDowns[index].style.display = "block";
        }
    });
});

// Alert Box Delete Index

const trashIcons = document.querySelectorAll("#trash-ensalamento");
const alertBoxes = document.querySelectorAll(".content-alert-box");
const body = document.querySelector("body");

trashIcons.forEach((btnTrash, index) => {
    btnTrash.addEventListener("click", function () {
      alertBoxes[index].classList.toggle("show");
      body.style.overflow = 'hidden'
    });
});

const btnGerarEnsalamento = document.querySelector("#btn-gerar-ensalamento");
const alertBoxesEnsalamento = document.querySelector(".content-alert-box-ensalamento");

btnGerarEnsalamento.addEventListener("click", function () {
    alertBoxesEnsalamento.classList.toggle("show");
    body.style.overflow = 'hidden'
});

window.addEventListener('DOMContentLoaded', () => {
    const contentContainer = document.querySelector('.container-index-ensalamento');
    const cards = Array.from(contentContainer.querySelectorAll('.content-ensalamento'));

    cards.sort((a, b) => {
      const nomeSalaA = a.querySelector('.content-header h3').textContent;
      const nomeSalaB = b.querySelector('.content-header h3').textContent;
      
      const numberA = Number(nomeSalaA.split(' ')[1]);
      const numberB = Number(nomeSalaB.split(' ')[1]);
      
      return numberA - numberB;
    });

    cards.forEach((card) => contentContainer.appendChild(card));
});

