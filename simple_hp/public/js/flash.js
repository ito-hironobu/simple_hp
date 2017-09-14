var message = '伊藤の部屋';
var speed = 500;
var flag = 0;

function disp(){
  if(flag == 0){
    document.getElementById('ito').innerHTML = message;
    flag = 1;
  }else{
    document.getElementById('ito').innerHTML = "";
    flag = 0;
  }
  setTimeout("disp()", speed);
}
