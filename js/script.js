/*
var modal = document.getElementById('myModal');
var txt = document.getElementById('myTxt');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var bigimg = document.getElementById("bigmyImg1");


txt.onclick = function(){
  modal.style.display = "block";
  modalImg.src = bigimg.src;
  if(bigimg.style.visibility == 'hidden')
  {
  	bigimg.style.visibility = 'visible';
  } else 
  {
  	bigimg.style.visibility = 'hidden';
  }
}

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = bigimg.src;
  if(bigimg.style.visibility == 'hidden')
  {
  	bigimg.style.visibility = 'visible';
  } else 
  {
  	bigimg.style.visibility = 'hidden';
  }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
} 





////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



var modal2 = document.getElementById('myModal2');
var txt2 = document.getElementById('myTxt2');
var img2 = document.getElementById('secImg');
var modalImg2 = document.getElementById("img02");
var captionText2 = document.getElementById("caption2");
var bigimg2 = document.getElementById("bigmyImg2");


txt2.onclick = function(){
  modal2.style.display = "block";
  modalImg2.src = bigimg2.src;
   if(bigimg2.style.visibility == 'hidden')
  {
  	bigimg2.style.visibility = 'visible';
  } else 
  {
  	bigimg2.style.visibility = 'hidden';
  }
}

img2.onclick = function(){
  modal2.style.display = "block";
  modalImg2.src = bigimg2.src;
     if(bigimg2.style.visibility == 'hidden')
  {
  	bigimg2.style.visibility = 'visible';
  } else 
  {
  	bigimg2.style.visibility = 'hidden';
  }
}

var span = document.getElementsByClassName("close")[1];

span.onclick = function() {
  modal2.style.display = "none";
} 

*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




$('.input-number-increment').click(function() {
	alert("Merci ! Votre vote à bien été pris en compte !");
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  $input.val(val + 1);
});




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}





var like = document.getElementsByClassName("like")[0];
var temp = 0;

like.onclick = function() {
  if(temp == 0){
    like.style.color ="#00CCFF";

    temp = 1;
  } else {
    like.style.color ="black";
    temp = 0;
  }
  
}
