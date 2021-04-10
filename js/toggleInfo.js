//jshint esversion:6
const masinfoToggle = () => {
  const masInfoButton0 = document.querySelectorAll(".descripcion-imagenes-button")[0];
  const masInfoButton1 = document.querySelectorAll(".descripcion-imagenes-button")[1];
  const masInfoButton2 = document.querySelectorAll(".descripcion-imagenes-button")[2];
  const masInfoButton3 = document.querySelectorAll(".descripcion-imagenes-button")[3];
  const masInfoButton4 = document.querySelectorAll(".descripcion-imagenes-button")[4];
  const masInfoButton5 = document.querySelectorAll(".descripcion-imagenes-button")[5];
  const masInfoButton6 = document.querySelectorAll(".descripcion-imagenes-button")[6];
  const masInfoButton7 = document.querySelectorAll(".descripcion-imagenes-button")[7];
  const masInfoButton8 = document.querySelectorAll(".descripcion-imagenes-button")[8];
  const masInfoButton9 = document.querySelectorAll(".descripcion-imagenes-button")[9];

  const masInfoUList0 = document.querySelectorAll(".mas-info")[0];
  const masInfoUList1 = document.querySelectorAll(".mas-info")[1];
  const masInfoUList2 = document.querySelectorAll(".mas-info")[2];
  const masInfoUList3 = document.querySelectorAll(".mas-info")[3];
  const masInfoUList4 = document.querySelectorAll(".mas-info")[4];
  const masInfoUList5 = document.querySelectorAll(".mas-info")[5];
  const masInfoUList6 = document.querySelectorAll(".mas-info")[6];
  const masInfoUList7 = document.querySelectorAll(".mas-info")[7];
  const masInfoUList8 = document.querySelectorAll(".mas-info")[8];
  const masInfoUList9 = document.querySelectorAll(".mas-info")[9];

  masInfoButton0.addEventListener('click',()=>{
    masInfoUList0.classList.toggle("mas-info-active");
  });

  masInfoButton1.addEventListener('click',()=>{
    masInfoUList1.classList.toggle("mas-info-active");
  });

  masInfoButton2.addEventListener('click',()=>{
    masInfoUList2.classList.toggle("mas-info-active");
  });

  masInfoButton3.addEventListener('click',()=>{
    masInfoUList3.classList.toggle("mas-info-active");
  });

  masInfoButton4.addEventListener('click',()=>{
    masInfoUList4.classList.toggle("mas-info-active");
  });

  masInfoButton5.addEventListener('click',()=>{
    masInfoUList5.classList.toggle("mas-info-active");
  });

  masInfoButton6.addEventListener('click',()=>{
    masInfoUList6.classList.toggle("mas-info-active");
  });

  masInfoButton7.addEventListener('click',()=>{
    masInfoUList7.classList.toggle("mas-info-active");
  });

  masInfoButton8.addEventListener('click',()=>{
    masInfoUList8.classList.toggle("mas-info-active");
  });

  masInfoButton9.addEventListener('click',()=>{
    masInfoUList9.classList.toggle("mas-info-active");
  });
};

masinfoToggle();
