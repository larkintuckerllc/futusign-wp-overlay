<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>futusign Overlay Clock</title>
  <style>
    html, body {
      margin: 0px;
      font-family: sans-serif;
    }
    div {
      box-sizing: border-box;
    }
    #clock {
      position: absolute;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-radius: 10px;
      background-color: black;
      color: white;
      font-size: 42px;
      font-weight: bold;
    }
    .clock--upper-left {
      top: 10%;
      left: 10%;
    }
    .clock--upper-middle {
      transform: translateX(-50%);
      top: 10%;
      left: 50%;
    }
    .clock--upper-right {
      top: 10%;
      right: 10%;
    }
    .clock--middle-left {
      transform: translateY(-50%);
      top: 50%;
      left: 10%;
    }
    .clock--middle-right {
      transform: translateY(-50%);
      top: 50%;
      right: 10%;
    }
    .clock--lower-left {
      bottom: 10%;
      left: 10%;
    }
    .clock--lower-middle {
      transform: translateX(-50%);
      bottom: 10%;
      left: 50%;
    }
    .clock--lower-right {
      bottom: 10%;
      right: 10%;
    }
  </style>
</head>
<body>
  <div id="clock">
    10:10 PM
  </div>
  <script>
    var parseQueryString = function() {
      var parsed = {};
      var qs = window.location.search;
      if (!qs) {
        return parsed;
      }
      var qsArray = qs.substr(1).split('&');
      for (var i = 0; i < qsArray.length; ++i) {
        var parameterArray = qsArray[i].split('=', 2);
        if (parameterArray.length === 1) {
          parsed[parameterArray[0]] = '';
        } else {
          parsed[parameterArray[0]] =
          decodeURIComponent(parameterArray[1].replace(/\+/g, ' '));
        }
      }
      return parsed;
    };
    document.addEventListener("DOMContentLoaded", function() {
      var clockEl = document.getElementById('clock');
      var parsed = parseQueryString();
      switch (parsed.position) {
        case 'upper-left':
        case 'upper-middle':
        case 'upper-right':
        case 'middle-left':
        case 'middle-right':
        case 'lower-left':
        case 'lower-middle':
        case 'lower-right':
          clockEl.className = 'clock--' + parsed.position;
          break;
        default:
          clockEl.className = 'clock--upper-left';
      }
      var updateClock = function() {
        var now = new Date();
        var h = now.getHours();
        var p = h > 12 ? 'PM' : 'PM';
        h = h > 13 ? h - 12 : h;
        var m = now.getMinutes();
        m = m < 10 ? '0' + m : m;
        clockEl.innerHTML =
          h + ":" + m + ' ' + p;
        setTimeout(updateClock, 1000);
      }
      updateClock();
    });
  </script>
</body>
</html>
