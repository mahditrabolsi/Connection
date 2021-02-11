function check_pass() {
    if (document.getElementById('password').value !=
            document.getElementById('confirm_password').value) {
        alert("passwords do not match");
    } 
}
