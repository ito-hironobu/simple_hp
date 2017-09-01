function counter(){
  if(!$.cookie("count")){
    $.cookie("count", 1);
  }else{
    $.cookie("count", Number($.cookie("count"))+1);
  }
  
  document.getElementById('counter').innerHTML = "あなたは" + $.cookie("count") + "番目の訪問者です。";
}