var options = {
  strings: ["FROID", "FROID"],
  typeSpeed: 120,
  loop: true,
  loopCount: Infinity,
  cursorChar: ".",
};

var typed = new Typed("#fc", options);
function animateValue(id, start, end, duration) {
  var range = end - start;
  var current = start;
  var increment = end > start ? 1 : -1;
  var stepTime = Math.abs(Math.floor(duration / range));
  var obj = document.getElementById(id);
  var timer = setInterval(function () {
    current += increment;
    obj.innerHTML = current;
    if (current == end) {
      clearInterval(timer);
    }
  }, stepTime);
}

// animateValue("value", 1, 189, 5);
function onReady(callback) {
  var intervalId = window.setInterval(function () {
    if (document.getElementsByTagName("body")[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 2000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? "block" : "none";
}

onReady(function () {
  setVisible(".page", true);
  setVisible("#loading", false);
});





