function ajax_get(url, callback) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            try {
                var data = JSON.parse(xmlhttp.responseText);
            } catch (err) {
                console.log(err.message + " in " + xmlhttp.responseText);
                return;
            }
            callback(data);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.setRequestHeader('Access-Control-Allow-Headers', '*');
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader('Access-Control-Allow-Origin', '*');
    xmlhttp.send();
}

ajax_get('https://api.campsite.life/mc', function(data) {
    if (data["message"] === "Server offline") {
        document.getElementById("main").innerHTML = "<red>The Minecraft server is currently offline</red>";
        document.getElementById("information").innerHTML = "";
    } else {
        document.getElementById("hostname").innerHTML = data["hostname"];
        document.getElementById("software").innerHTML = data["software"];
        document.getElementById("motd").innerHTML = data["motd"];
        document.getElementById("version").innerHTML = data["version"];
        document.getElementById("player_count").innerHTML = data["player_count"];
        if (data["player_count"] !== "0 / 50") {
            document.getElementById("yes").innerHTML = "<red><u>Players online:</red></u></br>"
            document.getElementById("players").innerHTML = data["players"];
        }
    }
});