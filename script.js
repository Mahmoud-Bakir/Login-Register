const email_in = document.getElementById("email-in")
const email_up = document.getElementById("email-up")
const password_in = document.getElementById("password_in")
const password_up = document.getElementById("password_in")
const login=document.getElementById("login")
const signup=document.getElementById("signup")



function getPosts() {
    fetch("https://jsonplaceholder.typicode.com/posts")
      .then((response) => response.json())
      .then((posts) => {
        postsArray = posts;
        displayPosts()
      })
      .catch((error) => console.log(error))
  }
  