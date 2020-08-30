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
    xmlhttp.send();
}

ajax_get('https://api.campsite.life/boost', function(data) {
    document.getElementById("boosters").innerHTML = data["boosters"];
    document.getElementById("boost_level").innerHTML = data["level"];
    document.getElementById("boost_count").innerHTML = data["boost_count"];
});