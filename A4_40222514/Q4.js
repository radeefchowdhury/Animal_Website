function display_c() {
    var refresh = 1000;
    mytime = setTimeout('display_ct()', refresh);

}
function display_ct() {
    var x = new Date();
    document.getElementById('ct').innerHTML = x;
    display_c();
}

function validateForm() {
    var x = document.form["fname"][form].value
    if (x == "") {
        alert("Fill out everything");
        return false;
    }

}






