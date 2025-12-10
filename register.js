document.getElementById("registrationForm").addEventListener("submit",function(e){
e.preventDefault();

let formData = new FormData(e.target);
fetch("save_registration.php", {
   method: "POST",
    body: formData
})
.then(response=> response.text())
.then(data => {
    document.getElementById("responseMessage").innerHTML=data;
})
.catch(err =>{
    document.getElementById("responseMessage").innerHTML= "Error submitting form";
})
})