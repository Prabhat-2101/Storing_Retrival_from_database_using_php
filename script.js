function onlyLetter(evt){
    var ascii = (evt.which) ? evt.which : evkeyCode
    if ((ascii>=65 && ascii<=90) || (ascii>=97 && ascii<=122) || ascii==32)
        return true;
    return false;
}
function onlyNumber(evt){
    var ASCIICode = (evt.which) ? evt.which : evkeyCode
    if (ASCIICode > 31 && (ASCIICode < 48 |ASCIICode > 57))
        return false;
    return true;
}