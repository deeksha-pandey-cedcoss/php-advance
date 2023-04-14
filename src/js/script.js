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
function interChangeValue(){
    let first=$("#first").val();
    $("#first").val($("#second").val());
    $("#second").val(first);
    updatevalue();

}