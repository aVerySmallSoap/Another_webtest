const btn = document.querySelectorAll(".btn");
setTimeout(() =>{
    for (const elem of btn) {
        elem.addEventListener("mouseenter", () => {
            elem.style.transition = "ease-out 600ms";
            elem.style.transform = "translateY(-10px)";
            elem.style.backgroundColor = "#CEE6F3";
        });
        elem.addEventListener("mouseleave", () => {
            elem.style.transition = "ease-in 600ms";
            elem.style.transform = "";
            elem.style.backgroundColor = "";
        });
    }
}, 5000);