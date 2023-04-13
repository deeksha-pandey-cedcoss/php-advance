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