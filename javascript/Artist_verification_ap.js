function approveNotice(UserName) {
    updateApprovalStatus(encodeURIComponent(UserName), 'Account Status:Verified', 'successfully Approved the Account ', UserName);
}

function disapproveNotice(UserName) {
    updateApprovalStatus(encodeURIComponent(UserName), 'Account Status:Not Verified', 'successfully disapproved the Account', UserName);
}

function updateApprovalStatus(UserName, status, message, buttonId) {
    let xhr = new XMLHttpRequest();
    let encodedUserName = encodeURIComponent(UserName);
    let encodedStatus = encodeURIComponent(status);

    xhr.open('GET', '../controllers/Update_Approval_Status_Artist.php?UserName=' + encodedUserName + '&status=' + encodedStatus, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(message);

            let approveButton = document.getElementById('approveButton_' + buttonId);
            let disapproveButton = document.getElementById('disapproveButton_' + buttonId);

            if (approveButton) {
                approveButton.style.display = 'none';
            }

            if (disapproveButton) {
                disapproveButton.style.display = 'none';
            }

            let noticeElement = document.getElementById(UserName);
            if (noticeElement) {
                noticeElement.parentNode.removeChild(noticeElement);
            }
        }
    };

    xhr.send();
}

function checkNotifications() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '../controllers/Artist_Approval_check.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('ShowApprovalNotice').innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}
