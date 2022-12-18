function aplicarCnpjMask(idElement){
    v = document.getElementById(idElement).value

    v=v.replace(/\D/g,"");

    v=v.replace(/^(\d{2})(\d)/,"$1.$2")
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
    v=v.replace(/(\d{4})(\d)/,"$1-$2")

    document.getElementById(idElement).value = v;
}