const Root = document.querySelector("body");
const BG = document.querySelector(".bg");

Root.addEventListener("mousemove", function (e) {
  BG.style.left = `${e.clientX}px`;
  BG.style.top = `${e.clientY}px`;

  BG.style.display = "block";
});

Root.addEventListener("mouseout", function (e) {
  BG.style.display = "none";
});
