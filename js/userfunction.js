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
            alert(msg);
            
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
            alert(result);
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
            alert(msg);
            
        }
    })
}