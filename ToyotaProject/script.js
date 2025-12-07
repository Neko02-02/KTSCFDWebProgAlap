document.addEventListener("DOMContentLoaded", function () {

    
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();

            let email = document.getElementById("email");
            let pw = document.getElementById("password");

            if (!email.value || !pw.value) {
                alert("Kérlek töltst ki az emailt és jelszót!");
                return;
            }

            alert("Sikeres bejelentkezes (szimulált)");
        });
    }

    
    const loadBtn = document.getElementById("loadModels");

    if (loadBtn) {
        loadBtn.addEventListener("click", function () {

            fetch("cars.json")
                .then(res => res.json())
                .then(data => {

                    const out = document.getElementById("models");
                    out.innerHTML = "";

                    data.cars.forEach(car => {
                        let box = document.createElement("div");
                        box.className = "car-box";
                        box.innerHTML = `
                            <h3>${car.name}</h3>
                            <p>Évjárat: ${car.year}</p>
                            <p>Típus: ${car.type}</p>
                        `;
                        out.appendChild(box);
                    });
                });
        });
    }

    
    const video = document.getElementById("promo");
    if (video) {
        document.getElementById("playVideo").onclick = () => video.play();
        document.getElementById("pauseVideo").onclick = () => video.pause();
    }

    
    const contact = document.getElementById("contactForm");
    if (contact) {
        contact.addEventListener("submit", function (event) {
            event.preventDefault();

            let name = document.getElementById("name");
            let email2 = document.getElementById("email2");

            if (!name.value || !email2.value) {
                alert("Töltsd ki az összes mezőt!");
                return;
            }

            alert("Űrlap elküldve (szimulált)");
            contact.reset();
        });
    }
});
