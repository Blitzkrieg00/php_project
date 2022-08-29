const popContainer = document.querySelector('.popContainer');
const popRegisterContainer = document.querySelector('.popRegisterContainer');
const loginContainer = document.getElementById('loginContainer');
const registerContainer = document.getElementById('registerContainer');
const loginPop = document.querySelector('.loginPop');

let openModel = false;

popContainer.addEventListener('click', () => {
  if (!openModel) {
    loginContainer.classList.add('blurContainer');
    openModel = !openModel;
  } else {
    loginContainer.classList.remove('blurContainer');
    openModel = !openModel;
  }
});

popRegisterContainer.addEventListener('click', () => {
  console.log('hello');
  openModel = false;
  if (!openModel) {
    loginContainer.classList.remove('blurContainer');
    registerContainer.classList.add('blurContainer');
    openModel = !openModel;
  } else {
    registerContainer.classList.remove('blurContainer');
    openModel = !openModel;
  }
});

loginPop.addEventListener('click', () => {
  openModel = false;
  if (!openModel) {
    registerContainer.classList.remove('blurContainer');
    loginContainer.classList.add('blurContainer');
    openModel = !openModel;
  } else {
    loginContainer.classList.remove('blurContainer');
    openModel = !openModel;
  }
});
