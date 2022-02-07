const check = document.querySelector("input");
const ul = document.querySelector("ul");

check.addEventListener("click", function () {
    ul.classList.toggle("slide");
});
const localtionIn = document.querySelector("#location_In");
const localtionAbsen = document.querySelector("#locationAbsen");

function getlocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}

function showPosition(position) {
    let i = (document.querySelector("input[name=ldGeo]").value =
        position.coords.latitude);
    let b = (document.querySelector("input[name=lgGeo]").value =
        position.coords.longitude);
}

localtionIn.addEventListener("click", function () {
    let lititude = document.querySelector("input[name=ldGeo]").value;
    let longit = document.querySelector("input[name=lgGeo]").value;

    var map = L.map("map").setView([lititude, longit], 13);
    var tiles = L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
        {
            maxZoom: 18,
            attribution:
                'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: "mapbox/streets-v11",
            tileSize: 512,
            zoomOffset: -1,
        }
    ).addTo(map);

    var marker = L.marker([lititude, longit])
        .addTo(map)
        .bindPopup("<b>Hello world!</b><br />I am a popup.")
        .openPopup();

    var popup = L.popup()
        .setLatLng([lititude, longit])
        .setContent("I am a standalone popup.")
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("lokas akurat " + e.latlng.toString())
            .openOn(map);
        const localIN = document.querySelector("#location_In");
        let lt = e.latlng.lat + " " + e.latlng.lng;
        localIN.value = lt;
        let lg = e.latlng.lat;
    }

    map.on("click", onMapClick);
});
