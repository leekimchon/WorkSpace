var a=1;
var arr=[];
let width = 1;
let idInterval = null;
for(var i=0; i<100; i++){
    arr[i]=i+1;
};

function show(){
    document.getElementById('timso').innerHTML='Tìm số '+a;
    arr.sort(function(){return 0.5 - Math.random()});
    var table='';
    let index = 1;
    for(var i=0; i<100; i+=10){
        table+='<tr>';
            for(var j=i; j<i+10; j++){
                table+='<td id="'+j+'" onclick="click_so('+j+')">'+arr[j]+'</td>';
                index++;
            };
        table+='</tr>';
    };
    document.getElementById('show').innerHTML=table;
    a=1;
};
show();
function click_so(j){
    clearInterval(idInterval);
    width = 1;
    if(arr[j]==a){
        document.getElementById(''+j+'').style.opacity=0;
        a++;
        idInterval = setInterval(frame, 150);
        if(a!=101){
            document.getElementById('timso').innerHTML='Tìm số '+a;
        }
    };
    if(a==101){
        alert('You Win');
    };
};

function frame() {
    var element = document.getElementById("thanh2");   
    if (width == 100) {
        alert('you lose');
        clearInterval(idInterval);
    } else {
        width++; 
        element.style.width = width + '%'; 
    };
};
function click_play(){
    show();
};