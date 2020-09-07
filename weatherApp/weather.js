$(document).ready(function() {
    $.ajax({
        type: "POST",
        url: "http://api.openweathermap.org/data/2.5/weather?q=bangkok&appid=55d193b8cc97a9dfba634b0c0297f27a&units=metric",
        dataType: "json",
        success: function(result, status, xhr) {

            var locationContect = $(

                "<h1 id='city'>" + result["name"] + " <img src='https://www.countryflags.io/" + result["sys"]["country"] + "/shiny/48.png'></h1>" +
                "<p id='lonlat'>lon: " + result["coord"]["lon"] + ", lat: " + result["coord"]["lat"] + "</p>"

            );

            $("#locationdiv").html(locationContect);

            var temperature = $(

                "<img src='http://openweathermap.org/img/wn/" + result["weather"][0].icon + "@2x.png'>" + result["weather"][0].main + "</img>" +
                "<p class='text-uppercase'>min: " + result["main"]["temp_min"] + " max: " + result["main"]["temp_max"] +
                "<br><span class='h1' id='temp'>" + result["main"]["temp"] + " °C</span>" +
                "<br><span class='h5 lead' id='feeltemp'>feels: " + result["main"]["feels_like"] + " °C</span>" + "</p>"

            );

            $("#tempdiv").html(temperature);

        },
        error: function(result, status, error) {
            alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
        }
    });
});