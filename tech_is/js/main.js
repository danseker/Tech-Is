//       Hiển thị lướt login/logout
function slideSignUp() {
  const curtain = document.getElementsByClassName("curtain");
  const slideMessage = document.getElementsByClassName("sign-message");
  curtain[0].style.transform = "translateX(-100%)";
  curtain[0].style.transition = "all 1s ease-out";
  slideMessage[0].innerHTML =
    "<h2>Chào mừng bạn đến với Tech Is!</h2><br>" +
    "<p>Để mua hàng cũng như sớm nhận được những thông báo về các đợt khuyến mại của " +
    "Tech Is, hãy đăng kí tài khoản bằng thông tin của bạn.</p><br><br>" +
    "<p class='sign-question'>Đã có tài khoản?</p>" +
    "<button class='sign-btn' onclick='slideSignIn()'>Đăng nhập ngay</button>";
}

function slideSignIn() {
  const curtain = document.getElementsByClassName("curtain");
  const slideMessage = document.getElementsByClassName("sign-message");
  curtain[0].style.transform = "translateX(0)";
  curtain[0].style.transition = "all 1s ease-out";
  slideMessage[0].innerHTML =
    "<h2>Chào mừng bạn trở lại!</h2><br>" +
    "<p>Để tiếp tục mua hàng một cách nhanh chóng cũng như sớm nhận được những thông báo vầ các đợt khuyến mại mới nhất của " +
    "Tech Is, hãy đăng nhập bằng thông tin tài khoản của bạn.</p><br><br>" +
    "<p class='sign-question'>Chưa có tài khoản?</p>" +
    "<button class='sign-btn' onclick='slideSignUp()'>Đăng kí ngay</button>";
}
