////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}





////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




var like = document.getElementsByClassName("like")[0];
var temp = 0;

like.onclick = function() {
  alert("clicked");

  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","http://localhost:3000/likepicture/1", true);
  xmlhttp.send();

  /*$.ajax({
      method: "GET",
      url: "http://localhost:3000/likepicture/1", 
      data: "ha",
      dataType: "json"
  })
  .done(function(data) {
    alert("success");
})
  .fail(function(data) {
    alert("fail")
});*/


  /*if(temp == 0){
    like.style.color ="#00CCFF";
    temp = 1;
  } else {
    like.style.color ="black";
    temp = 0;
}*/
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
