function login(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    $.ajax({
        url : "http://localhost/project/php/logins.php",
        type : "POST",
        data : {
            username : username,
            password : password
        },
        success:function(msg){
            if(msg == "not"){
                alert("Not registerd");
            }
            if(msg == "database"){
                alert("database error");
            }
            if(msg == "success"){
                alert("Log in success");
                window.location.assign("userinfo.php");
            }
            
        }
    })
    
}

function Register(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var fullname = document.getElementById('fullName').value;
    var address1 = document.getElementById('address1').value;
    var address2 = document.getElementById('address2').value;
    var address3 = document.getElementById('address3').value;
    var postCode = document.getElementById('postCode').value;
    var state = document.getElementById('state').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;

    $.ajax({
        url:"http://localhost/project/php/register.php",
        type:"POST",
        data:{
            username : username,
            password : password,
            fullname : fullname,
            address1 : address1,
            address2 : address2,
            address3 : address3,
            postCode : postCode,
            state : state,
            phone : phone,
            email : email
        },
        success:function(result){
            if(result == "success"){
                alert("Register Success");
               }
               if(result == "email"){
                   alert("Your email format is wrong");
               }
                if(result == "database"){
                    alert("database error");
                }
        }
    })
    
}

function JumpRegister(){
    window.location.assign("register.html")
}

function forgetPass(){
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;

    $.ajax({
        url : "http://localhost/project/php/forgetPass.php",
        type : "POST",
        data : {
            username : username,
            email : email
        },
        success:function(msg){
           if(msg == "success"){
               alert("Your new password is sented");
               window.location.assign("login.html");
           }
           if(msg == "database"){
            alert("database error");
        }
        if(msg == "failed"){
            alert("Sorry we can't sent the new password to you due to technical problem");
        }
        if(msg == "result"){
            alert("You are not register yet, please register");
        }
        }
    })
}

function getInfo(username){

    $.ajax({
        url : "http://localhost/project/php/getUserInfo.php",
        type : "POST",
        data : {
            username : username
        },
        success:function(msg){
            document.getElementById('userInfo').innerHTML = msg;
        }
    })

}

function UpdateInfo(username){
    var oldPass = document.getElementById('Oldpassword').value;
    var Pass1 = document.getElementById('password1').value;
    var Pass2 = document.getElementById('password2').value;
    var fullname = document.getElementById('fullName').value;
    var address1 = document.getElementById('address1').value;
    var address2 = document.getElementById('address2').value;
    var address3 = document.getElementById('address3').value;
    var postCode = document.getElementById('postCode').value;
    var state = document.getElementById('state').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
   
    $.ajax({
        url:"http://localhost/project/php/updateinfo.php",
        type:"POST",
        data:{
            username :username,
            oldPass : oldPass,
            password1 : Pass1,
            password2 : Pass2,
            fullname : fullname,
            address1 : address1,
            address2 : address2,
            address3 : address3,
            postCode : postCode,
            state : state,
            phone : phone,
            email : email
        },
        success:function(result){
            
            if(result == "success"){
                alert("changed saved");
                
               }
               if(result == "wrong"){
                   alert("Your old password is wrong");
                   
               }
                if(result == "database"){
                    alert("database error");
                    
                }
                if(result == "not same"){
                    alert("Your new password is not matched");
                    
                }
                
        }
    })
}