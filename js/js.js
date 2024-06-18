const loader = document.querySelector("#loader");
const loadingPercent = document.getElementById("loading-percent");
const wrapper = document.querySelector(".wrapper")
const bar = document.querySelector(".bars")
const nav = document.querySelector(".nav")
const body = document.querySelector("body")

function updateProgressBar() {
  const resourceCount = document.querySelectorAll('*').length;
  const loadedResources = document.querySelectorAll(':not(script):not(link):not(img)').length; 
  const percent = Math.round((loadedResources / resourceCount) * 100);

  loadingPercent.textContent = percent + "%";
}

document.addEventListener('DOMContentLoaded', () => {
  updateProgressBar();
});

document.onreadystatechange = function () {
  if (document.readyState === "complete") {
    loader.style.display = "none";
  }
};

window.onload = function () {
  loader.style.display = "none";
};

function hideProgressBar() {
  loader.style.display = 'none';
}
window.onresize = function () {
  updateProgressBar();
};

