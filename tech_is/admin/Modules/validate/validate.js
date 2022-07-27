function validateForm() {
    const EMPTY_STR = "";
    var check = true;
    var user_name = document.getElementById('user_name');
    var user_phone = document.getElementById('user_phone');
    var user_mail = document.getElementById('user_email');
    var user_name_error = document.getElementById('user_name_error');
    var user_phone_error = document.getElementById('user_phone_error');
    var user_mail_error = document.getElementById('user_email_error');
    if (user_name.value == EMPTY_STR) {
        user_name.style.boder = "1px solid red";
        user_name_error.innerHTML = "Bạn phải nhập họ tên";
        user_name_error.stytle.color = "red";
        check = false;
    }
    if (user_phone.value == EMPTY_STR) {
        user_phone.style.boder = "1px solid red";
        user_phone_error.innerHTML = "Bạn phải nhập số điện thoại";
        user_phone_error.stytle.color = "red";
        check = false;
    }
    if (user_email.value == EMPTY_STR) {
        user_email.style.boder = "1px solid red";
        user_email_error.innerHTML = "Bạn phải nhập email";
        user_email_error.stytle.color = "red";
        check = false;
    }
    return check;
}