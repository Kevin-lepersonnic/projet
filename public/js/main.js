'use strict';

const searchForm = document.querySelector('#search-user');
const searchInput = document.querySelector('#search');
const tbody = document.querySelector('#user-list tbody');
const BASE_URL = 'https://kevinlepersonnic.sites.3wa.io/Developpement/projet/public';


function searchUser() {
    const search = searchInput.value;

    fetch(`${BASE_URL}/ajax/users?search=${search}`).then(response => response.text()).then(results => {
        tbody.innerHTML = results;
    });
}

searchForm.addEventListener('submit', (event) => {
    event.preventDefault();
});

searchInput.addEventListener('keyup', (event) => {
    searchUser();
});

searchInput.addEventListener('search', (event) => {
    searchUser();
});
