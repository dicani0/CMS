function getUsersOnline() {
    $.get("./components/ajax/getOnlineUsers.php?onlineusers=result", function (data) {
        $(".usersonline").text(data);
    });
}

setInterval(function () {
    getUsersOnline();
}, 500);
