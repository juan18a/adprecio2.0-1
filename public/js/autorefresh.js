
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}


function autorefresh(){

window.onload = timedRefresh(60000);


}






