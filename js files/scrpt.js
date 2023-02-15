 var searchBtn = document.querySelector('#search-btn');
 var searchBar = document.querySelector('.search-bar-container');
 var formBtn = document.querySelector('#login-btn');
 var loginForm = document.querySelector('.login-form-container');
 var formclose = document.querySelector('#form-close');

 window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    loginForm.classList.remove('active');
 }
 
 searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
 }); 

 formBtn.addEventListener('click', () =>{
   loginForm.classList.add('active');
}); 

formclose.addEventListener('click', () =>{
   loginForm.classList.remove('active');
}); 