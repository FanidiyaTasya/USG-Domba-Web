function updateDateTime() {
    var now = new Date();
    
    var year = now.getFullYear();
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var day = ("0" + now.getDate()).slice(-2);
    var hours = ("0" + now.getHours()).slice(-2);
    var minutes = ("0" + now.getMinutes()).slice(-2);
    var seconds = ("0" + now.getSeconds()).slice(-2);

    var dateTimeString = year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds;
    document.getElementById('date_time').value = dateTimeString;
}
setInterval(updateDateTime, 1000);    
updateDateTime();