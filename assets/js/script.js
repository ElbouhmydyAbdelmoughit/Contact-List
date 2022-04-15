const password_user= document.getElementById("Password");
const password_verify_user= document.getElementById("Password_verify");
if (password_user.value != password_verify_user) {
    Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password or Password verify incorrect',
          })
}