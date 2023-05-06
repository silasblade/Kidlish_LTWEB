// validation form register and register user local storage
const inputUsernameRegister = document.querySelector(".signup-input-name");
const inputPhonenumberRegister = document.querySelector(".signup-input-phone");
const inputPasswordRegister = document.querySelector(".signup-input-pass");
const btnRegister = document.querySelector(".signup-submit");

// validation form register and register user local storage

btnRegister.addEventListener("click", (e) => {
  e.preventDefault();
  if (
    inputUsernameRegister.value === "" ||
    inputPhonenumberRegister.value === "" ||
    inputPasswordRegister.value === ""
  ) {
    alert("Vui lòng không để trống!");
  } else {
    // array user
    const user = {
      username: inputUsernameRegister.value,
      phonenumber: inputPhonenumberRegister.value,
      password: inputPasswordRegister.value,
    };
    let json = JSON.stringify(user);
    localStorage.setItem(inputUsernameRegister.value, json);
    alert("Bạn đã đăng ký thành công tài khoản Kidlish!");
    window.location.href = "login.html";
  }
});