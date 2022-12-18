function aplicarCpfMask(idElement){
    v = document.getElementById(idElement).value

    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

    document.getElementById(idElement).value = v;
}
