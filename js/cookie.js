function english(){
    alert("english")
	eraseCookie("lang");
	setCookie("lang", "en", 365);
	location.reload();
}

function spain(){
    alert("spain")
	eraseCookie("lang");
	setCookie("lang", "es", 365);
	location.reload();
}

function french(){
    alert("french")
	eraseCookie("lang");
	setCookie("lang", "fr", 365);
	location.reload();
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {   
    setCookie(name,"",-1);
}