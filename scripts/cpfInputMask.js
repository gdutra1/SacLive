function aplicarCpfMask(idDocumento){
    v = document.getElementById(idDocumento).value

    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

    document.getElementById(idDocumento).value = v;
}
