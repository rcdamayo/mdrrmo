<!DOCTYPE html>
<html>
<head>
<style>
    /* Style the chat container */
    .chat-container {
        border: 1px solid #ccc;
        padding: 10px;
        width: 300px;
        margin: 0 auto;
    }
    
    /* Style the chat messages */
    .chat-message {
        margin: 10px 0;
    }
    
    /* Style the user input field */
    .user-input {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
</style>
</head>
<body>

<div class="chat-container" id="chat-container">
    <div class="chat-message" id="chat-message">
        <p>Welcome to the chat! Start by typing a message below:</p>
    </div>
    <input type="text" class="user-input" id="user-input" placeholder="Type your message here">
</div>

<script>
function sendMessage() {
    var userInput = document.getElementById('user-input');
    var chatMessage = document.getElementById('chat-message');
    var message = userInput.value;

    if (message !== '') {
        var newMessage = document.createElement('p');
        newMessage.innerHTML = '<strong>You:</strong> ' + message;
        chatMessage.appendChild(newMessage);
        userInput.value = '';

        // Send message to the server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_message.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('user=You&message=' + encodeURIComponent(message));
    }
}

function loadMessages() {
    // Retrieve messages from the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var chats = JSON.parse(xhr.responseText);
            var chatMessage = document.getElementById('chat-message');
            chatMessage.innerHTML = ''; // Clear existing messages

            chats.forEach(function (msg) {
                var newMessage = document.createElement('p');
                newMessage.innerHTML = '<strong>' + msg.user + ':</strong> ' + msg.message;
                chatMessage.appendChild(newMessage);
            });
        }
    };
    xhr.open('GET', 'save_message.php', true);
    xhr.send();
}

// Load messages on page load
loadMessages();

// Event listener for the Enter key
document.getElementById('user-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
        loadMessages(); // Reload messages after sending a new one
    }
});

// Automatically load messages every 5 seconds (adjust as needed)
setInterval(function () {
    loadMessages();
}, 1000);

</script>

</body>
</html>
