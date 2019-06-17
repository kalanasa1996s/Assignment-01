// Validation - Customer ID

$("inputID").click(function () {
    var cid=$("txtID").val();
    var regEx ="/C-\d{3}/";
    var result = regEx.test(cid);
    if (!result){
        alert("ID IS INVALID")

    }

})