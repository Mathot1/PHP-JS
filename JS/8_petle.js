


document.getElementById("PRZYCISK").onclick = function funkcjaa(){
    var i;
var j = 0;
var a = document.getElementById("nr1");

var z;
var piramida = "";
    a = a.value;
    a = parseInt(a);
    var y = a;
while (j<=a){

for (z = 1; z <= y; z++){
    
        piramida += "&nbsp;"; 
        

}
     

for (i = 1; i <= j; i++){
    
         piramida += "*";
        
        

}
  piramida += " <br> ";
j +=1;
y -=1;

}
  document.getElementById("dab").innerHTML= piramida; 
//    document.write(piramida);
}