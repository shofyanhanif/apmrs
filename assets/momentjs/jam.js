setInterval(function (date) {
    var date = moment();
    date.locale("id");
    var currentDayTime = date.format("dddd, DD/MM/YYYY HH:mm:ss");
    $("#clock").text(currentDayTime);
}, 1000); // update setiap 1 detik


