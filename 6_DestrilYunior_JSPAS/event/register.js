    const formRegis = document.getElementById("form-regis");
    const feedbackMessage = document.getElementById("feedback");
    
    // mendengarkan event submit pada form
    formRegis.addEventListener("submit", function(event){
      event.preventDefault();
      const data = new FormData(event.target);
      alert (feedbackMessage.innerHTML = `Regis Dengan Username ${data.get("username")} Berhasil Dikirim! :)"`);
    });

    // mendengarkan event reset pada form
    formRegis.addEventListener("reset", function(){
      feedbackMessage.textContent = "Form Sudah Dibersihkan :) !";
    });