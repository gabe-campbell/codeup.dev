(function() {
    "use strict";
    var leftInput = document.getElementById("lat");
    var rightInput = document.getElementById("lng");
    var submitButton = document.getElementById("latlngSubmit");
    var latValue;
    var lngValue;

    var jqxhr = $.ajax("http://api.openweathermap.org/data/2.5/forecast/daily", {
    data: {
        APPID: "29cc33db4854ab9ecc64968701153a58",
        lat:    29.423017,
        lon:   -98.48527,
        units: "imperial"
    }
    }).done(function(data) {
      console.log(data);
      var i = 0;

      $(data.list).each(function() {
        var content = "<div class=\"dailyWeather\"><h3>" + data.list[i].temp.max + "&deg" + " / " + data.list[i].temp.min + "&deg" + "</h3><img class=\"weatherIcon\" src=\"http://openweathermap.org/img/w/" + data.list[i].weather[0].icon + ".png\"></div>";
        $("#dailyContainer").append(content);
        i++;
      });
    });

    function getLocation(e) {
      var target = getTarget(e);
      target.preventDefault();
      //
      // latValue = leftInput.value();
      // lngValue = rightInput.value();
      console.log("hi");
    }

    function getTarget(e) {
      if (!e) {                                      // If there is no event object
        e = window.event;                            // Use old IE event object
      }
      return e.target || e.srcElement;               // Get the target of event
    }


    $("#latlngSubmit").on('submit', function(e) {
      e.preventDefault();
      console.log("hi");
    }, false);
})();
