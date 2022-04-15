let loginForm = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () => {
  loginForm.classList.toggle("active");
  searchForm.classList.remove("active");
};

let menu = document.querySelector("#menu-btn");
let headerMenu = document.querySelector(".header-menu");

menu.onclick = () => {
  headerMenu.classList.toggle("active");
  loginForm.classList.remove("active");
};

$('.add').click(function () {
  if ($(this).prev().val() < 10) {
    $(this).prev().val(+$(this).prev().val() + 1);
  }
});
$('.sub').click(function () {
  if ($(this).next().val() > 1) {
    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
  }
});
