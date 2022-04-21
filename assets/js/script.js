const username= document.getElementById("Username");
const password_user= document.getElementById("Password");
const password_verify_user= document.getElementById("Password_verify");

function validation(){
    if (username.value == "" || username.value == null) {
        
        alert("Please fill in Username");
        return false;
    }else if (password_user.value == "" || password_user.value == null) {
        alert("Please fill in Password");
        return false;
    }else if (password_verify_user.value == "" || password_verify_user.value == null) {
        alert("Please fill in Password verify");
        return false;
    }else if (password_user.value == password_verify_user) {
        alert("Password or Password verify incorrect");
        return false;
    }else{return true;}
}

const username_login = document.getElementById("username");
const password_login = document.getElementById("password");

    function validation_login() {
        if (username_login == "" || username_login == NULL) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in Username!',
            })
            return false;
        }
        if (password_login == "" || password_login == NULL) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in Password!',
            })
            return false;
        }
    }
