var Links ={
  setColor: function(color){
  //   var alist = document.querySelectorAll('a');
  //   var i = 0;
  //   for(var i =0; i<alist.length;i++){
  //         alist[i].style.color = color;
  // }
  $('a').css('color',color);
  }
}
// var Body = {
//   setColor : function(color){
//     $('body').css('color',color);
//   },
//   setBackgroundColor : function(color){
//     $('body').css('backgroundColor',color);
//   }
// }
function nightDayHandle(self){
    var target = document.querySelector('body').style;
    if(self.value==='night'){
       target.backgroundColor = 'black';
       target.color = 'white';
       self.value = 'day';
       Links.setColor('powderblue');

    } else {
      target.backgroundColor = 'white';
      target.color = 'black';
      self.value = 'night';
      Links.setColor('black');

    }
}
function openProfile(){
  var newProfile = window.open('./contact.html','popup','width = 600px, height =600px, scrollbars = no, resizable = no'); 
}
