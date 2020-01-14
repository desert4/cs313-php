function changeColor(){
    //inputColor = document.getElementById("color").value;
    //document.getElementById("div1").style.backgroundColor = inputColor;
    inputColor = $('#color').val();
    $('#div1').css('backgroundColor', inputColor);
}

function clicked(){
    alert("Clicked");
}

function moveMe() {
    $(document).ready(function() {
        $("p").click(function(){
            $(this).changeColor();
        });
    });
}



