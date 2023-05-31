console.log("Koordynaty");
let box = document.getElementById("moveMe");
document.getElementById("move").addEventListener("click", () => {
    console.log("Moving");
    box.style.position = "absolute";
    box.style.top = 150 + "px";
    box.style.left = 150 + "px";
});
