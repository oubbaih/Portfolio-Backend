// let navbarTop = document.getElementById('navbar-id');
// console.log(navbarTop);
// window.addEventListener('scroll', (event) => {
//   let windowHeight = this.scrollY;
//   if (windowHeight > navbarTop.offsetTop) {
//     navbarTop.style =
//       'background-color:rgba(15,20,30 , .2); transition:background-color  ease-in-out 0.1s';
//   } else {
//     navbarTop.style = 'background-color:transparent';
//   }
// });

// Loading animation

let LoadinElemt = document.getElementById("loading");

window.addEventListener("load", function () {
    this.setTimeout(() => {
        LoadinElemt.classList.remove("show");
        LoadinElemt.classList.add("hide");
    });
});

let menuBTN = document.getElementById("menu-btn");
menuBTN.addEventListener("click", function () {
    let offcanvas = document.getElementById("offcanvasNavbar");
    offcanvas.classList.add("show");
    offcanvas.style.visibility = "visible";
});
let closeBTN = document.getElementById("close");
closeBTN.addEventListener("click", function () {
    let offcanvas = document.getElementById("offcanvasNavbar");
    // console.log(offcanvas);
    offcanvas.classList.remove("show");
    offcanvas.style.visibility = "";
});
