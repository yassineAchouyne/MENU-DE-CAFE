function changer(n){
    if(n==1){
        window.location.href='livreur.php'
    }else{
        window.location.href='menu.php'
    }
}
function color(){
    var btn1=document.getElementsByClassName('livreur')[0];
    var btn =btn1.getElementsByTagName('a')
    for(i=0;i<btn.length;i++){
        c1=Math.floor(Math.random()*225+1) 
        c2=Math.floor(Math.random()*225+1) 
        c3=Math.floor(Math.random()*225+1) 
        btn[i].style.backgroundColor="rgb("+ c1 +"," + c2 +","+c3+")";
    }
    
}
function selecte(l){
    // var line=l.style.backgroundColor;
    if(l.style.backgroundColor!="rgb(91, 130, 145)"){
        l.style.backgroundColor="rgb(91, 130, 145)"
    }else{
        l.style.backgroundColor="transparent"
    }
}
function imprimerie(){
    var line=document.getElementsByClassName('line');
    
}