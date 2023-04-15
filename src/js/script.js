// sign up
$("#sign").click(function () {
    $mail = $("#email").val();
    $pw = $("#password").val();
    if ($mail == "" || $pw == "") {
        $("#error").html("Enter Values").css("color", "red").fadeOut(2000);
    }
    else{
        $.ajax({
            url: "../Controller/logindata.php",
            type: "GET",
            data: { 'email': $mail, 'pass': $pw },
            datatype: "json"
        }).done(function () {
        window.location.href="../View/logindetails.php";
    }     
)}
})
// submit details
$(document).on('click', '#submit', function () {
  
    $name = $("#form3Example1c").val();
    $email = $("#form3Example3c").val();
    $pass = $("#form3Example4c").val();
    $repass = $("#form3Example4cd").val();

    if (!(check_data($name, $email, $pass, $repass))) {
        $.ajax({
            url: "../Controller/signupdata.php",
            datatype: "json",
            data: { 'name': $name, 'email': $email, 'pass': $pass },
            type: "post"
        }).done(function (result) {
            console.log(result);
            window.location = "../View/Login.php";
        })
    }
});
// validation check
function check_data($name, $email, $pass, $repass) {
    let flag = false;
    if ($name == "") {
        $("#error_n").html("Enter Values").css("color", "red").fadeOut(2000);
        flag = true;
    }
    else if ($email == "") {
        $("#error_e").html("Enter Values").css("color", "red").fadeOut(2000);
        flag = true;
    }
    else if ($pass == "") {
        $("#error_p").html("Enter values").css("color", "red").fadeOut(2000);
        flag = true;
    }
    else if ($repass == "") {
        $("#error_cp").html("Enter values").css("color", "red").fadeOut(2000);
        flag = true;
    }
    else if ($pass != $repass) {
        $("#error_cp").html("Enter values of password do not match").css("color", "red").fadeOut(2000);
        flag = true;
    }
    return flag;
}
// uppercase change
function uppercase()
{
    let text=$("#text").val();
    $.ajax({
        url:"../Controller/change.php",
        data:{"text":text,"action":"uppercase"},
        type:"POST",
        success:function(result){
            $("#changed").val(result);
        }
    })
}
// lowercase change
function lowercase()
{
    let text=$("#text").val();
    $.ajax({
        url:"../Controller/change.php",
        data:{"text":text,"action":"lowercase"},
        type:"POST",
        success:function(result){
            $("#changed").val(result);
        }
    })
}
// filter text
function filtertext()
{
    let text=$("#textchange").val();
    $.ajax({
        url:"../Controller/change.php",
        data:{"text":text,"action":"filter"},
        type:"POST",
        success:function(result){
            $("#changedval").val(result);
        }
    })
}
// update value
function updatevalue(){
    let firstValue=$("#first").val();
    let SecondValue=$("#second").val();
    let amt=$("#amount").val();
    console.log(amt);
    if(amt>0){
        if(firstValue==SecondValue){
            $(".finalValue").html(amt);
            console.log(firstValue);
        }else{
            $.ajax({
                url:'../Controller/convert.php',
                type:'post',
                data:{'first':firstValue,'second':SecondValue,'amt':amt},
                datatype:JSON,
                success:function(value){
                    console.log(value);
                     $(".finalValue").html(value);
                }
            })
        }
    }
}
// intercahnge value
function interChangeValue(){
    let first=$("#first").val();
    $("#first").val($("#second").val());
    $("#second").val(first);
    updatevalue();

}
// category dropdown
$(".category").change(function(){
    let value=$(".category").val();
    console.log(value);
    $.ajax({
        url:"../View/dropdown.php",
        type:"POST",
        data:{'val':value},
        datatype: "json",
        success:function(result){
            console.log(result);
        }

    })

})
// product display
function changeProduct(){
    let val=$("#productItem").val();
    $.ajax({
        url:'../Controller/dynamic.php',
        data:{'text':val,'action':'changeItem'},
        type:'post',
        datatype:'text',
        success:function(value){
            console.log(value);
            $("#items").html(value);
        }
    })
}
// change item
function changeItems(){
    let val=$("#productItem").val();
    let val1=$("#items").val();
    $.ajax({
        url:'../Controller/dynamic.php',
        data:{'text':val,'action':'changeItemsValue','text1':val1},
        type:'post',
        datatype:'text',
        success:function(value){
            console.log(value);
            $("#idValue").html(value);
        }
    })
}
// show details
function showItems(){
    let val=$("#productItem").val();
    let val1=$("#items").val();
    let val2=$("#idValue").val();
    $.ajax({
        url:'../Controller/dynamic.php',
        data:{'text':val,'action':'showTable','text1':val1,'text2':val2},
        type:'post',
        datatype:'text',
        success:function(value){
            console.log(value);
            $("#tableDetail").html(value);
        }
    })
}