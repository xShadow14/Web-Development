function textChecker() {
  let input = document.getElementById("input").value;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById("result").innerHTML = xhr.responseText;
      }
  };
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var name_1 = document.getElementById("name_1").value;
  xhr.open("GET", "project5_2.php?collection=" + input + '.' + name + '.' + password + '.' + name_1, true);
  xhr.send();
}
let interval = setInterval(textChecker2, 1000);

function textChecker2() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById("input_2").innerHTML = xhr.responseText;
      }
  };
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var name_1 = document.getElementById("name_1").value;
  xhr.open("GET", "project5_3.php?collection=" + name + '.' + password + '.' + name_1, true);
  xhr.send();
}
