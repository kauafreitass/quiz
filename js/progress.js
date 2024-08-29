function updateProgressBar(currentQuestion, totalQuestions) {
    const progressBar = document.getElementById('progress-bar');
    const progress = (currentQuestion / totalQuestions) * 100;
    progressBar.style.width = `${progress}%`;
    progressBar.setAttribute('aria-valuenow', progress);
}
