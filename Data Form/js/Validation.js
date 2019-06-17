$("#btnValidation").click(function () {

    var value1 =$("#inputID").val();
    var regX =/C\d{3}/;
    var result = regX.test(value1);
    if (!result) {
        $("#inputID").css('border', '1px solid red').focus();
    }
});