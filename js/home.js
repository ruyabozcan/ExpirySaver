// Banner Button Click Event
const exploreButton = document.querySelector(".banner .btn");
if (exploreButton) {
  exploreButton.addEventListener("click", () => {
    alert("Explore our discounted products now!");
  });
}

// Call-to-Action Button Click Event
const signUpButton = document.querySelector(".cta .btn");
if (signUpButton) {
  signUpButton.addEventListener("click", () => {
    window.location.href = "register.html";
  });
}
