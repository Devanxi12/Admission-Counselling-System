function toggleChat() {
    let chat = document.getElementById("chatWindow");

    if (chat.style.display === "block") {
        chat.style.display = "none";
    } else {
        chat.style.display = "block";
    }
}

function sendMessage() {

    let input = document.getElementById("userInput");
    let chatBody = document.getElementById("chatBody");

    let message = input.value.trim();

    if (message === "") {
        return;
    }

    // User Message
    chatBody.innerHTML += `
        <div class="user-message">
            <b>You:</b> ${message}
        </div>
    `;

    // Bot Typing
    chatBody.innerHTML += `
        <div class="bot-message" id="typing">
            🤖 Typing...
        </div>
    `;

    chatBody.scrollTop = chatBody.scrollHeight;

    fetch("chatbot.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "message=" + encodeURIComponent(message)
    })
    .then(response => response.text())
    .then(data => {

        let typing = document.getElementById("typing");

        if (typing) {
            typing.remove();
        }

        chatBody.innerHTML += `
            <div class="bot-message">
                <b>Bot:</b> ${data}
            </div>
        `;

        chatBody.scrollTop = chatBody.scrollHeight;
    })
    .catch(error => {

        let typing = document.getElementById("typing");

        if (typing) {
            typing.remove();
        }

        chatBody.innerHTML += `
            <div class="bot-message">
                ❌ Server Error
            </div>
        `;
    });

    input.value = "";
}

// Enter key support
document.addEventListener("DOMContentLoaded", function () {

    const userInput = document.getElementById("userInput");

    if(userInput){

        userInput.addEventListener("keydown", function(event){

            if(event.key === "Enter"){

                event.preventDefault();
                sendMessage();

            }

        });

    }

});