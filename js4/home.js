var counter = 1;
setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }
}, 2500);

// ✅ Set the correct future date
var targetDate = new Date("May 10, 2025 00:00:00").getTime();

function countDown() {
  var current = new Date().getTime();
  var difference = targetDate - current;

  // ✅ First check: if time already expired
  if (difference <= 0) {
    document.getElementById("day").innerText = "0";
    document.getElementById("hour").innerText = "0";
    document.getElementById("minute").innerText = "0";
    document.getElementById("second").innerText = "0";

    const title = document.querySelector(".paracount p");
    if (title) {
      title.innerText = "VOTING CLOSED";
    }

    return; // ❌ Stop execution to prevent negatives
  }

  // ✅ Only calculate countdown if time is valid
  var second = 1000;
  var minute = second * 60;
  var hour = minute * 60;
  var day = hour * 24;

  var d = Math.floor(difference / day);
  var h = Math.floor((difference % day) / hour);
  var m = Math.floor((difference % hour) / minute);
  var s = Math.floor((difference % minute) / second);

  document.getElementById("day").innerText = d;
  document.getElementById("hour").innerText = h;
  document.getElementById("minute").innerText = m;
  document.getElementById("second").innerText = s;
}

setInterval(countDown, 1000);

// ✅ Call immediately to avoid 1-second delay
countDown();
