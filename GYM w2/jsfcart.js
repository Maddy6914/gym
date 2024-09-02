const navTrigger = document.querySelector('.navTrigger');
const navbar = document.querySelector('.nav-container');
navTrigger.addEventListener('click', () => {
    navTrigger.classList.toggle('active');
    if (navTrigger.classList.contains('active')) {
        navbar.style.right = "0";
    }
    else {
        navbar.style.right = "3000px";
    }
});



const subm = document.querySelector("#submit");

subm.addEventListener('click', () => {

    const name = document.querySelector("#namesender").value;
    const emailid = document.querySelector("#emailid").value;
    const msg = document.querySelector("#msg").value;

    let sub = " Name: " + name + " Email: " + emailid;

    Email.send({
        SecureToken: "56fc1b6a-9739-49f0-8dbe-7c36a4c2af63",
        To: 'waytofantasy@gmail.com',
        From: "iahamedsha@gmail.com",
        Subject: sub,
        Body: msg
    }).then(
        message => alert(message)
    );
});


     