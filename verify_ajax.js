// CONSTANTS
const GREEN = 'green';
const RED = 'red';

document.getElementById('submitBtn').addEventListener('click', function () {
    const username = document.getElementById('username').value.trim();

    // Check if input is empty, if empty then show message in red and return
    if (username === '') {
        showMessage('Please key in username', RED);
        return;
    }

    // Send username to info.php using ajax
    fetch('info.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'username=' + encodeURIComponent(username)
    })
        .then(response => response.text())
        .then(result => {
            // Green for Verified, red for Error
            showMessage(result, result === 'Verified' ? GREEN : RED);
        });
});

// Show message below the button in the given colour scheme
function showMessage(text, color) {
    const message = document.getElementById('message');
    message.textContent = text;
    message.style.color = color;
}