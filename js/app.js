//jshint esversion:6

const navIconCategories = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".categ-icon");
  const categories = document.querySelector(".categories");

  burger.addEventListener('click',()=>{
    nav.classList.toggle("categ-icon-active");
    categories.classList.toggle("categories-active");
    burger.classList.toggle("burger-active");
  });
};

navIconCategories();
