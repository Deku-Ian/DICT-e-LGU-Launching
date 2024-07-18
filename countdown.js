
// Prevent minimizing the window
function preventMinimize() {
    window.addEventListener('blur', function() {
        window.focus();
    });
}

// Function to go to the third page
function goToThirdPage() {
    window.location.href = 'third_page.php';
}

// Start countdown after 200ms
setTimeout(function() {
    let count = 19;
    const countdownDisplay = document.getElementById('countdownDisplay');
    const nextButton = document.getElementById('nextButton');
    const video = document.getElementById('countdownVideo');
    const backdrop = document.getElementById('backdrop');
    function updateCountdown() {
        if (count > 0) {
            //countdownDisplay.textContent = count;
            count--;
            setTimeout(updateCountdown, 1000);
        } else {
            video.style.display = 'none';
            video.muted = true;
            countdownDisplay.style.display = 'none';
            backdrop.style.display = "block";
            backdrop.play();
            backdrop.loop = true;
            nextButton.style.display = 'block';
        }
    }

    video.play();
    updateCountdown();
}, 200);

// Call preventMinimize function
preventMinimize();
