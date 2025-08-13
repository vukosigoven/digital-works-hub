// dashboard.js

// Replace user name dynamically if stored in localStorage or fetched from API
document.addEventListener("DOMContentLoaded", () => {
  const userNameSpan = document.getElementById("user-name");

  // Example: fetch user name from session storage or API
  let userName = localStorage.getItem("userName") || "User";
  userNameSpan.textContent = userName;

  // Optional: Add dark mode toggle (example)
  const body = document.body;
  const toggleBtn = document.createElement("button");
  toggleBtn.textContent = "Toggle Dark Mode";
  toggleBtn.style.marginLeft = "1rem";
  toggleBtn.style.padding = "0.5rem 1rem";
  toggleBtn.style.border = "none";
  toggleBtn.style.borderRadius = "5px";
  toggleBtn.style.cursor = "pointer";
  toggleBtn.onclick = () => {
    body.classList.toggle("dark-mode");
  };
  document.querySelector("header.dashboard-header nav").appendChild(toggleBtn);
});
