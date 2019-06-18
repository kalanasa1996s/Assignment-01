
//Validation for Phone Number
if (
    $("#btn-Add").click(function () {
        var value = $("#txtPhoneno").val();
        var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
        var result = regEx.test(value);
        if (!result) {
            alert(" Telephone Number is Invalid");
        }
    })) ;

//Validation for Name
if (
    $("#btn-Add").click(function () {
        var value = $("#txtname").val();
        var regEx = /^[a-zA-Z]*$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Name Is Invalid..Please Input Only Letters And Remove White Spaces");
        }
    })
) ;

//validation for salary
if (
    $("#txtSalary").click(function () {
        var value = $("#txtSalary").val();
        var regEx = /^\d{1,6}\.\d{1,6}$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Please input Salary Like : 0000.00/");
        }
    })
) ;



// Validation - Customer ID

$("#btn-Add").click(function () {
    var cid=$("#txtID").val();
    var regEx ="/C-\d{3}/";
    var result=regEx.test(cid);
    if (!result) {
        alert("ID is Invalid")
    }
});
$("#txtID").keyup(function () {
    if($("#txtID").val().length>4){
        alert("C001 - විදිට ගහපන් පිස්සු කෙලින් නැතුව")
    }
});