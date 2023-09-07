function display(val){
    document.getElementById('display').value += val;
}

function clearD(){
    document.getElementById('display').value = '';
}

function calculate(){
    const result = eval(document.getElementById('display').value);
    document.getElementById('display').value = result;
    }