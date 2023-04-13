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
        }).done(function (result) {
    //    console.log(result);
      
        // $("#displaydetails").html(result);  
        window.location.href="../View/logindetails.php";
    }     
    
)}
})