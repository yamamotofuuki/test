//問１
function menseki(hankei){
    return (hankei*hankei*3.14)+"cm²";
}

document.write(menseki(5)+"<br>");
document.write(menseki(7)+"<br>");
document.write(menseki(10)+"<br>");



document.write("<p>");




//問２
function yuuennti(gr,otona,kodomo){
    return gr+"グループの合計金額は"+(500*otona+200*kodomo)+"円です。";
}

document.write(yuuennti("A",2,4)+"<br>");
document.write(yuuennti("B",1,5)+"<br>");
document.write(yuuennti("C",3,7)+"<br>");
