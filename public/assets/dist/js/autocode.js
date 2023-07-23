$(document).ready(function() {
    var code = document.getElementById("code");
    var getCode = document.getElementById("getCode");
    var time = new Date();

    var base_code = code.getAttribute("base-code");
    var year = time.getFullYear();
    var month = time.getMonth() + 1;
    var day = time.getDate();
    var h = time.getHours();
    var m = time.getMinutes();
    var s = time.getSeconds();
    var ss = time.getMilliseconds();

    code.value = base_code+year+month+day+h+m+s+ss;
    getCode.value = base_code+year+month+day+h+m+s+ss;
});
