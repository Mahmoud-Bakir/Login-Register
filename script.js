
const password_up = document.getElementById("password_in")
const login=document.getElementById("login")
const signup=document.getElementById("signup")



login.addEventListener("click", ()=> {
    const email_in = document.getElementById("email_in").value
    const password_in = document.getElementById("password_in").value
    console.log(email_in)
    console.log(password_in)
    const data={
        email:email_in,
        password:password_in
    }

    fetch("https://localhost/Login-Register/signin.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
  
})
