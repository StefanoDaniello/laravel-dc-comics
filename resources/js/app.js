import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const searchForm = document.getElementById("search-form");
if (searchForm) {
    const searchSelect = document.getElementById("search");
    searchSelect.addEventListener("change", () => {
        if (searchSelect.value !== "all") {
            searchForm.submit();
        }
    });
}
document.addEventListener("DOMContentLoaded", function() {
    var searchSelect = document.getElementById('search');

    // Quando l'utente cambia la selezione, memorizza il valore selezionato
    searchSelect.addEventListener('change', function() {
        localStorage.setItem('selectedOption', this.value);
    });

    // Controlla se c'è un'opzione selezionata precedentemente e ripristinala
    var selectedOption = localStorage.getItem('selectedOption');
    if (selectedOption) {
        searchSelect.value = selectedOption;
    }
});


const deleteButton = document.getElementById("comicDelete");
if (deleteButton) {
    deleteButton.addEventListener("click", (e) => {
        e.preventDefault();
        const modale = document.getElementById("exampleModal");
        const myModal = new bootstrap.Modal(modale);
        myModal.show();
        const btnSave = modale.querySelector(".btn.btn-primary");
        //console.log(btnSave);
        btnSave.addEventListener("click", () => {
            deleteButton.parentElement.submit();
        });
    });
}