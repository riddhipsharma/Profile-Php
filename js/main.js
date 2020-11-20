/*let menubtn = document.querySelector(".menu-btn");
menubtn.addEventListener('click', function(e){
    let navmenu = document.querySelector('nav ul');
    navmenu.classList.toggle('showmenu');
});

let maincontent = document.querySelector("main");
maincontent.addEventListener('click',function(e){
    let navmenu = document.querySelector('nav ul');
    navmenu.classList.remove('showmenu')
})*/

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    let navmenu = document.querySelector('nav ul');
    navmenu.classList.toggle('showmenu');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    let navmenu = document.querySelector('nav ul');
    navmenu.classList.remove('showmenu')
    menuOpen = false;
  }
});