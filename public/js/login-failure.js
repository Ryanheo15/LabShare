const urlParams = new URLSearchParams(window.location.search);
const loginStatus = urlParams.get('login');

if (loginStatus === "fail") {
    $("#failed-login-message").removeClass("d-none");
}