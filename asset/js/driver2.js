
function tiktok (a){
  const xhr = new XMLHttpRequest();
  let text = document.getElementById('load')
  xhr.onload=function(){
    text.innerHTML=this.response;
  }
  xhr.open('GET', a,true);
  xhr.send()

}