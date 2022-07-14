window.onload = () => {
    const genre = document.getElementById("genre");

    genre.addEventListener("submit", function (event) {
        event.preventDefault();

        const genreForm = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "film.php");
        xhr.responseType = 'text';
        xhr.send(genreForm);

        xhr.onload = () => {
            document.getElementById("content").innerHTML += xhr.responseText;
        }
    })

    const actor = document.getElementById("actor");

    actor.addEventListener("submit", function (event) {
        event.preventDefault();

        const actorForm = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "film.php");
        xhr.responseType = 'json';
        xhr.send(actorForm);

        xhr.onload = () => {
            document.getElementById("content").innerHTML += xhr.response;
        }
    })

    const date = document.getElementById("date");

    date.addEventListener("submit", function (event) {
        event.preventDefault();

        const dateForm = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "film.php");
        xhr.responseType = 'document';
        xhr.send(dateForm);

        xhr.onload = () => {
            document.getElementById("content").innerHTML += xhr.responseXML.body.innerHTML;
        }
    })
}


