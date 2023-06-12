let btnMin = document.getElementById('mi');
let btnPlu = document.getElementById('pl');
let text = document.getElementById('count');
btnMin.addEventListener('click', function(){
    if(document.getElementById('count').value == 1){
        return;
    }
    else{
        summa =parseInt(count.value) -1;
        document.getElementById('count').value = summa;
    }
   
});
btnPlu.addEventListener('click', function(){
    if(document.getElementById('count').value == 3){
        return;
    }
    else{
        summa =parseInt(count.value) +1;
    document.getElementById('count').value = summa;
    }
    
});

