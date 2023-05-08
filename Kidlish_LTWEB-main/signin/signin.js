// validation form login
const inputUsername = document.querySelector(".signin-input-name");
const inputPassword = document.querySelector(".signin-input-pass");
const btnLogin = document.querySelector(".signin-submit");

// validation form login

btnLogin.addEventListener("click", (e) => {
  e.preventDefault();
  if (inputUsername.value === "" || inputPassword.value === "") {
    alert("Vui lòng không để trống");
  } else {
    const user = JSON.parse(localStorage.getItem(inputUsername.value));
    if (
      user.username === inputUsername.value &&
      user.password === inputPassword.value
    ) {
      alert("Bạn đã đăng nhập thành công tài khoản Kidlish!");
      window.location.href = "index.html";
    } else {
      alert("Đăng Nhập Kidlish Thất Bại");
    }
  }
});