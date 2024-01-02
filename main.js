//elements
var sendBtn = document.getElementById('sendBtn');
var textbox = document.getElementById('text-box');
var chatContainer = document.getElementById('chatContainer');
var httpRequest = new XMLHttpRequest();


function chatbotSendMessage(messageText) {

        var messageElement = document.createElement('div');
        messageElement.classList.add('shadow-sm');
        messageElement.classList.add('w-50');
        messageElement.style.margin = "10px";
        messageElement.style.float = "left";
        messageElement.style.padding = "5px";

        messageElement.innerHTML = "<span>Chatora: </span>" +
            "<span style=" + "margin-top: 10px; padding: 10px;" + ">" + messageText + "</span>"
        messageElement.animate([{ easing: "ease-in", opacity: 0.4 }, { opacity: 1 }], { duration: 500 });
       
            chatContainer.appendChild(messageElement);
            chatContainer.scrollTop = chatContainer.scrollHeight;
}


setTimeout(function () {
    chatbotSendMessage('Hi I am Chatora, How may I help you?');
}, 500);



function sendMessage(messageText) {
    var messageElement = document.createElement('div');
    messageElement.classList.add('shadow-sm');
    messageElement.classList.add('w-50');
    messageElement.style.margin = "10px";
    messageElement.style.float = "right";
    messageElement.style.padding = "5px";

    messageElement.innerHTML = "<span>You: </span>" +
        "<span style=" + "margin-top: 10px; padding: 10px;" + ">" + messageText + "</span>"

    messageElement.animate([{ easing: "ease-in", opacity: 0.4 }, { opacity: 1 }], { duration: 500 });

    chatContainer.appendChild(messageElement);
    chatContainer.scrollTop = chatContainer.scrollHeight;

    makeRequest(messageText);

}

function server_response() {
    if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200) {

        var result = JSON.parse(httpRequest.responseText);

        var messageElement = document.createElement('div');
        messageElement.classList.add('shadow-sm');
        messageElement.classList.add('w-50');
        messageElement.style.margin = "10px";
        messageElement.style.float = "left";
        messageElement.style.padding = "5px";

        messageElement.innerHTML = "<span>Chatora: </span>" +
            "<span style=" + "margin-top: 10px; padding: 10px;" + ">" + result.response_message + "</span>"
        messageElement.animate([{ easing: "ease-in", opacity: 0.4 }, { opacity: 1 }], { duration: 500 });

            chatContainer.appendChild(messageElement);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        
    }
}

function makeRequest(messageText) {
    //ajax

    httpRequest.open('GET', 'chatbot.php?message=' + messageText, true);
    httpRequest.send();
    httpRequest.onreadystatechange = server_response;
}


sendBtn.addEventListener('click', function (e) {
    if (textbox.value == "") {
        alert('Please Type in a message');
    }
    else {
        let messageText = textbox.value;
        sendMessage(messageText);
        textbox.value = "";
    }

});
