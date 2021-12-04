var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

function startProgress() {
    var progressEl = document.getElementById("progress");
    progressEl.style.width = "100%";
}

function endProgress() {
    var progressEl = document.getElementById("progress");
    progressEl.style.width = "0%";
}