
let kentekenSelect, anderKentekenInput, opdrgever, anderOpdrgeverInput;

const init = function(){

    kentekenSelect = document.getElementById('kenteken');
    kentekenSelect.addEventListener('change', kenteken);

    anderKentekenInput = document.getElementById('anderKenteken');

    opdrgeverSelect = document.getElementById('opdrgever');
    opdrgeverSelect.addEventListener('change', opdrachtgever);

    anderOpdrgeverInput = document.getElementById('anderOpdrgever');
}

const kenteken = function()
{
    let waarde = kentekenSelect.value;

    if(waarde == 'Anders'){
        anderKentekenInput.classList.remove('hidden');
    }else{
        anderKentekenInput.classList.add('hidden');
    }
}

const opdrachtgever = function()
{
    let waarde = opdrgeverSelect.value;

    if(waarde == 'Anders'){
        anderOpdrgeverInput.classList.remove('hidden');
    }else{
        anderOpdrgeverInput.classList.add('hidden');
    }
}


document.addEventListener('DOMContentLoaded', init);
