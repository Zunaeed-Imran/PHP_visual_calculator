function display(value){
    document.getElementById('display').value += value;
    }

    function cleardisplay(){
        document.getElementById('display').value = '';
    }
    function calculate(){
        try{
            const res = eval(document.getElementById('display').value);
            document.getElementById('display').value = res;
        }catch(error){
            document.getElementById('display').value = 'Error';
        }
    }

