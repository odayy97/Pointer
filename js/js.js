function random(top,bot,left,right){
    while(top,left,right,bot < 500){
    return Math.floor((Math.random() * top )) + bot;
    return Math.floor((Math.random() * right )) + left;
}
}

function move(){
    var top = random(480,0);
    document.getElementById("point").style.marginTop = top + "px";
    var bot = random(480,0);
    document.getElementById("point").style.marginBottom = bot + "px";
    var right = random(0.480);
    document.getElementById("point").style.marginLeft = right + "px";
    var left = random(0,480);
    document.getElementById("point").style.marginRight = left + "px";
   
}

var click=0; 

function hi(){
    click+=1; 
}
document.write("Score: " + click);

// function score(){ 
//     var points = 0;
//     while(points == 0 ){
//         document.getElementById("score").innerHTML ="Score:" + points++;
//     }
// }

