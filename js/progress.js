function updateProgressBar(currentQuestion, totalQuestions) {
    const progressBar = document.getElementById('progress-bar-1');
    const progressWidth = (currentQuestion / totalQuestions) * 100;
    progressBar.style.width = `${progressWidth}%`;
    progressBar.setAttribute('aria-valuenow', progressWidth);
}
