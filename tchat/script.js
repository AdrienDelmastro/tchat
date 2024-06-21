var socket = new WebSocket('ws://');
var chat;

const pseudo = sessionStorage.getItem('pseudo');

document.addEventListener('DOMContentLoaded', function() {
    chat = document.getElementById('chat');
    chat.addEventListener('keydown', function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("envoyer").click();
        }
    });

});


function envoyer(){
    if(chat.value) {
        let obj = {
            pseudo: pseudo,
            message: chat.value
        };
        let jsonStr = JSON.stringify(obj);

        socket.send(jsonStr);
        var newDiv = document.createElement("div");
        var pseudoChat = document.createElement("p");
        var paragraphe = document.createElement("p");
        var texte = document.createTextNode(chat.value);
        var txtPseudo = document.createTextNode(pseudo+":");

        pseudoChat.appendChild(txtPseudo);
        pseudoChat.classList.add("pseudoChat");
        paragraphe.appendChild(texte);
        paragraphe.classList.add("message");
        paragraphe.classList.add("rounded");
        newDiv.classList.add("divMessage");
        newDiv.classList.add("rounded");
        newDiv.classList.add("moi");
        newDiv.appendChild(pseudoChat);
        newDiv.appendChild(paragraphe);

        var tchat = document.getElementById("zoneTxt");
        tchat.appendChild(newDiv);
        chat.value = "";
        tchat.scrollTop = tchat.scrollHeight;
    }
}

socket.onmessage = function(e) {
    var newDiv = document.createElement("div");
    var pseudoChat = document.createElement("p");
    var paragraphe = document.createElement("p");
    let obj = JSON.parse(e.data);

    var texte = document.createTextNode(obj.message);
    var txtPseudo = document.createTextNode(obj.pseudo + ":");


    pseudoChat.appendChild(txtPseudo);
    pseudoChat.classList.add("pseudoChat");
    paragraphe.appendChild(texte);
    paragraphe.classList.add("message");
    paragraphe.classList.add("rounded");
    newDiv.classList.add("divMessage");
    newDiv.classList.add("rounded");
    newDiv.appendChild(pseudoChat);
    newDiv.appendChild(paragraphe);
    var tchat = document.getElementById("zoneTxt");
    tchat.appendChild(newDiv);
    tchat.scrollTop = tchat.scrollHeight;
}

