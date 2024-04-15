//

function getQR(){

    let inputt=document.getElementById('input');
    let inputt2=document.getElementById("input2");
    let inputt3=document.getElementById("input3");
    let inputt4=document.getElementById("input4");


    let textoConcatenado=inputt+","+inputt2+","+inputt3+","+inputt4;

    console.log(textoConcatenado)

    if(textoConcatenado===",,,")alert("Los datos estan vacios");

    var qrCodeURL = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' + encodeURIComponent(textoConcatenado);

    let qrIMG=document.createElement("img");
    qrIMG.src=qrCodeURL;
    qrIMG.alt="CodigoQR";

    qrIMG.classList.add("qr-code");
    
    document.getElementById("qr-code").appendChild(qrIMG);

}

console.log("hola")

