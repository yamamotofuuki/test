//問１
for (var i=0; i<5; i++){
    document.write("★");
}


document.write("<p>");


//問２
for (var star1=0; star1<2; star1++){
    
    for (var star2=0; star2<3; star2++){    
        document.write("★");
    }
    document.write("<br>");
}


document.write("<p>");


//問３
for (var star1=0; star1<2; star1++){
    
    for (var star2=0; star2<5; star2++){    
        document.write("☆");
    }
    document.write("<br>");
}


document.write("<p>");


//問４
for (var star1=0; star1<4; star1++){
    
    for (var star2=0; star2<5; star2++){
        document.write("★");
    }
    document.write("<br>");
}



document.write("<p>");



//問５
for (var star1=0; star1<4; star1++){
    
    for (var star2=0; star2<3; star2++){
        document.write("★");
    }
    document.write("<br>");
}


document.write("<p>");


//問６
for (var star1=0; star1<3; star1++){

    for (var star2=0; star2<3; star2++){
        if(star2 % 2==0){
            document.write("★");
        }　
        else{
            document.write("☆");
        }
    }
    document.write("<br>");
}


document.write("<p>");


//問７
for (var star1=0; star1<4; star1++){

    for (var star2=0; star2<5; star2++){
        if(star2 % 2==0){
            document.write("★");
        }　    
        else{
            document.write("☆");
        }
    }
    document.write("<br>");
}


document.write("<p>");



//問８
for (var star1=0; star1<5; star1++){

    for (var star2=0; star2<=star1; star2++){
        document.write("★");
    }
    document.write("<br>");
}










