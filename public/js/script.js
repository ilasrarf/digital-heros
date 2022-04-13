function content(i){
    let table = new Array("كيفاش","علاش","شنو الهدف");
    let tablee = new Array("كيفاش نشأ نادي أبطال الديجيتال","علاش نشأ نادي أبطال الديجيتال","شنو الهدف ديال نادي أبطال الديجيتال");
    let tableee = new Array("أستاذ المعلوميات فكر باش يوري التلامد تاعو مدى أهمية الديجتال و فكر مع واحد المجموعة باش يصاوبو واحد الكلوب لي يقدر يحقق فيه كل الأهداف تاعو .",
                                "أبطال الديجتال سمية تاع واحد الكرتون كيهدر علا شي أشخاص كاينين فالعالم تاع الديجتال و كانوا هما الأبطال تماك و لهذا داكشي سمينا الكلوب هاد سمية                                 ",
                                "الهدف هو اننا نحاولو نكتشفو المواهب المعلوماتية و نطوروها بشكل أفضل كما اننا غادي نحرصو على اندماجكم باش ينجح هاد الكلوب                                "
                            );

    let z = 1;
    let q;
    
    while(z <= 3){
        if((z-i) == 0){
            q = z;
        }
        document.getElementById(z).style.color ="#fff";
        document.getElementById(z).style.backgroundColor ="#6222CC";
        z++;
    }
    document.getElementById(q).style.color ="#fba504";
    document.getElementById(q).style.backgroundColor ="#fff";
    document.getElementById("head").innerHTML = table[q - 1];
    document.getElementById("headd").innerHTML = tablee[q - 1];
    document.getElementById("headdd").innerHTML = tableee[q - 1];
}

(function($) {
    showSwal = function(type) {
    'use strict';
    if (type === 'success-message') {
    swal({
    title: 'Congratulations!',
    text: 'You entered the correct answer',
    type: 'success',
    button: {
    text: "Continue",
    value: true,
    visible: true,
    className: "btn btn-primary"
    }
    })
    
    }else{
    swal("Error occured !");
    }
    }
    
    })(jQuery);


function rejex(){
    var checkBox1 = document.getElementById("check1");
    var checkBox2 = document.getElementById("check2");
    var inp1= document.getElementById("inp_pere");
    var inp2 = document.getElementById("inp_mere");
    var inpvlue = document.getElementById("inp_pere").value;

    if (checkBox1.checked == true){
        inp1.setAttribute("disabled", "");
        var inpvlue = "";
    } else {
        inp1.removeAttribute("disabled");
    }

    if (checkBox2.checked == true ){
        inp2.setAttribute("disabled", "");
    } else {
        inp2.removeAttribute("disabled");
    }
}

// function steps(){
//     var stp1 = document.getElementById("stp1");
//     var stp2 = document.getElementById("stp2");

//     stp2.classList.add("active");
//     stp1.classList.remove("active");
// }