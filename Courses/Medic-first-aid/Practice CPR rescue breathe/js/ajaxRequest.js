  // Corrected JavaScript function with form submission prevention and JSON parsing
  function student_registration(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    var student_email = $("#exampleInputEmail1").val();
    var student_pass = $("#exampleInputPassword1").val();
    var student_conf_password = $("#exampleInputPassword1_2").val();

    if (student_pass != student_conf_password) {
        alert("Both Passwords Didn't Match");
        console.log(student_email);
        console.log(student_pass);
        console.log(student_conf_password);
    } else {
        console.log(student_email);
        console.log(student_pass);
        console.log(student_conf_password);
        $.ajax({
            url: "Student/addStudent.php",
            method: "POST",
            dataType: "json", // Correct the case to ensure automatic JSON parsing
            data: {
                student_signup: "signup",
                student_email: student_email,
                student_pass: student_pass
            },
            success:function(response) { // 'response' is now already a JavaScript object
                if (response == "OK") {
                    console.log("Signup Successful");
                    $("#signup_success").html("<span>Signup Successful</span>");
                } else if (response == "Failed") {
                    console.log("Signup Failed");
                    $("#signup_success").html("<span>Unable to Register</span><br>");
                }
            }
        });
        
    }
}