
Date.prototype.isValid = function () {
    // An invalid date object returns NaN for getTime() and NaN is the only
    // object not strictly equal to itself.
    return this.getTime() === this.getTime();
};  

function formataData(date) {
    let year = date.substr(6, 4);
    let month = date.substr(0, 2);
    let day = date.substr(3, 2);

    return {"day": day, "month": month, "year": year};
}

function validaData(date) {
    
    let d = formataData(date);
    var mes = Number(d.month);
    var dia = Number(d.day);
    var ano = Number(d.year);

    var msg = "";

    if(ano >= 1000) {
        if(mes >= 1 && mes <=12) {
            
            if(mes==1 || mes== 3 || mes == 5 || mes == 7 || mes == 8 || mes == 10 || mes == 12) {
                if ( !(dia >= 1 && dia <= 31) ) {
                    msg += "Data inválida \n";
                }
            } else if ( mes == 2 ) {

                // verifica ano bissexto 
                if ((ano % 4 == 0) && ((ano % 100 != 0) || (ano % 400 == 0))) {
                    if ( !(dia >= 1 && dia <= 29) ) {
                        msg += "Data inválida \n";
                    }
                } else {
                    if ( !(dia >= 1 && dia <= 28) ) {
                        msg += "Data inválida \n";
                    }
                }


            } else {
                if ( !(dia >= 1 && dia <= 30) ) {
                    msg += "Data inválida \n";
                }
            }

        } else {
            msg += "Data inválida \n";
        }
    } else {
        msg += 'Data inválida \n';
    }

    return msg;
}

function validaForm(f) {

    
    var msg = "";

    msg += validaData(f.data.value);


    if(f.data.value == "") {
        msg += 'A data não pode ficar vazia \n';
    } else {


     // var m = moment(f.data.value, 'MM-DD-YYYY');
    //  var teste = m.isValid();
      
     // alert(teste);


    }

    if(f.texto.value == "") {
        msg += 'O texto não não pode ficar vazio \n';
    }

    // Valida o conteúdo do campo texto
    var reg = /[^a-z ]/g

    if (reg.test(f.texto.value)){
        msg += "Campo texto: Use apenas letras minúsculas e espaços \n";
    }

    // Valida o conteúdo do campo texto grande
    var reg = /[^A-Z0-9 ]/g

    if (reg.test(f.texto_grande.value)){
        msg += "Campo texto grande: Use apenas letras maiúsculas, números e espaços \n";
    }

    if(msg!="") {
        alert(msg);
        return false;
    } else {
        return true;
    }

}


