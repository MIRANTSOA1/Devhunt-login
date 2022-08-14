function click_1(){
    // alert("coucou");
    let btn1 = document.getElementById("button_1");
    btn1.style.backgroundColor = "#FCCA96";
    btn1.style.color = "#74292D";
    btn1.style.zIndex = 3;
    let btn2 = document.getElementById("button_2");
    btn2.style.backgroundColor = "#74292D";
    btn2.style.color = "#FCCA96";
    btn2.style.zIndex = 1;
}
function click_2(){
    // alert("coucou");
    let btn2 = document.getElementById("button_2");
    let btn1 = document.getElementById("button_1");
    btn2.style.backgroundColor = "#FCCA96";
    btn2.style.color = "#74292D";
    btn2.style.zIndex = 3;
    btn1.style.backgroundColor = "#74292D";
    btn1.style.color = "#FCCA96";
    btn1.style.zIndex = 1;
}