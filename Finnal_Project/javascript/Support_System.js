function loadalert_Messages_from_user() 
{
    let messageContainer = document.getElementById('messageContainer');
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '../Controller/loadalert_message_from_User.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            messageContainer.innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}

window.onload = function () 
{
    loadalert_Messages_from_user(); 
};



function sendMessageAdmin() {
    let messageForm = document.getElementById('messageForm');
    let messageTextarea = document.getElementById('message');
    let MessagedeleivryNotic = document.getElementById('MessagedeliverNotice');
    let message = messageTextarea.value.trim();

    if (!message) {  
        alert("Please Write the message");
        return false;
    }

    if (message !== '') {
        let formData = new FormData(messageForm);
        formData.append('Messages', message);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '../Controller/s_m_support_Artist_to_Admin.php', true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                MessagedeleivryNotic.innerHTML = xhr.responseText;
                messageTextarea.value = '';
                setTimeout(function() 
                {
                    location.reload();
                }, 2000);
            }
        };

        xhr.send(formData);
    }
}

function NewConversation(UserName) 
{
    let encodedUserName = encodeURIComponent(UserName);
    window.location.href = '../View/Support_Admin_to_user.php?Userindentity=' + encodedUserName;
}

function sendMessageUser(UserName) {
    let encodedUserName = encodeURIComponent(UserName);
    let messageTextarea = document.getElementById('message');
    let MessagedeleivryNotice = document.getElementById('MessagedeleivryNotice');
    let message = messageTextarea.value.trim();

    if (!message) {
        alert("Please write the message");
        return false;
    }

    if (message !== '') {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '../Controller/s_m_support_Admin_to_User.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        let SendMessage = 'Messages=' + encodeURIComponent(message) + '&UserName=' + encodedUserName;

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // loadMessages();
                MessagedeleivryNotice.innerHTML = xhr.responseText;
                messageTextarea.value = '';
                setTimeout(function () {
                location.reload();
                 }, 2000);
            }
        };

        xhr.send(SendMessage);
    }
}

