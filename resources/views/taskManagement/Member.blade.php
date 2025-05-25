<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color:rgb(255, 255, 255);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn img {
  width: 24px;  
  height: 24px;  
  vertical-align: middle; 
}

.dropbtn:hover, .dropbtn:focus {
  background-color:rgb(196, 225, 240);
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body style="background-color:white;">

<form method="POST" action="{{ route('taskManagement.Member') }}"></form>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><img src="/pics/add.png"></button>
  <div id="myDropdown" class="dropdown-content">
  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
  <div id="memberResults">
    <a>Loading...</a>
  </div>
</div>
</div>

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  loadMembers(""); 
}

function filterFunction() {
  const input = document.getElementById("myInput");
  const query = input.value.trim();
  loadMembers(query);
}

function loadMembers(query = "") {
  fetch(`/members/search?q=${encodeURIComponent(query)}`)
    .then(res => res.json())
    .then(data => {
      const results = document.getElementById("memberResults");
      results.innerHTML = "";

      if (data.length === 0) {
        results.innerHTML = "<a>No members found</a>";
        return;
      }

      data.forEach(member => {
        const a = document.createElement("a");
        a.href = "#";
        a.textContent = member.name;
        a.onclick = () => alert(`Selected: ${member.name}`);
        results.appendChild(a);
      });
    })
    .catch(() => {
      document.getElementById("memberResults").innerHTML = "<a>Error loading members</a>";
    });
}
</script>


</body>
</html>
