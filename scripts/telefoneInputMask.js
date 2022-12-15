function aplicarTelMask(idDocumento){
    v = document.getElementById(idDocumento).value

    v = v.replace(/\D/g,'')
    v = v.replace(/(\d{2})(\d)/,"($1) $2")
    v = v.replace(/(\d)(\d{4})$/,"$1-$2")

    document.getElementById(idDocumento).value = v;
}