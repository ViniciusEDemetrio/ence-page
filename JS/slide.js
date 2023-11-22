// define variavel radio aos ids da classe manual-btn
var radio= document.querySelector('.manual-btn')
var cont = 1
var timer = 20000

// marca o id radio1
document.getElementById('radio1').checked = true

setInterval(()=>{

    proximaImg()

},  timer)

function proximaImg(){
    cont++
    
    if(cont>2){
        cont=1
    }

    document.getElementById('radio'+cont).checked = true
}
