function sendEmail(){
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "kluskenstom2004@gmail.com",
        Password : "D7447C39BFFFCA85BD57DD89EAFEE43ABDCF",
        To : 'kluskenstom2004@gmail.com',
        From : 'kluskenstom2004@gmail.com',
        Subject : "New contact form entry",
        Body : "Name: " + document.getElementById("name").value
            + "<br> Email: " + document.getElementById("email").value
            + "<br> Phone nr: " + document.getElementById("phone").value
            + "<br> Message: " + document.getElementById("message").value
    }).then(
      message => alert("Message submitted!")
    );
}