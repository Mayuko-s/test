//問1
function menseki(r){
    return r*r*3.14;
}

//半径5cmの円
document.write("半径5cmの円の面積<br>");
document.write(menseki(5));
document.write("<br><br>");

//半径7cmの円
document.write("半径7cmの円の面積<br>");
document.write(menseki(7));
document.write("<br><br>");

//半径10cmの円
document.write("半径10cmの円の面積<br>");
document.write(menseki(10));
document.write("<br><br>");


//問2
function totalPrice(adultNum,childNum,adultPrice=500,childPrice=200){
    return adultPrice*adultNum+childPrice*childNum;
}

document.write("Aグループの合計金額<br>");
document.write(totalPrice(2,4)+"円です。");
document.write("<br><br>");

document.write("Bグループの合計金額<br>");
document.write(totalPrice(1,5)+"円です。");
document.write("<br><br>");

document.write("Cグループの合計金額<br>");
document.write(totalPrice(3,7)+"円です。");
document.write("<br><br>");


