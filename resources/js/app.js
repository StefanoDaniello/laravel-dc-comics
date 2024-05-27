import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const search_form = document.getElementById('search-form');
if(search_form){
   const searchSelect = document.getElementById("search");
   searchSelect.addEventListener('change', () => {
       if(searchSelect.value !== "all"){
           search_form.submit();
       }
   })
}