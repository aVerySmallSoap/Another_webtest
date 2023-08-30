function closeToast(){
    const toast = document.querySelector(".toast");
    toast.closest(".toast").remove();
}
function openToast(message){
    let div = document.createElement("div");
    div.className = "toast";
    div.innerHTML = "<div class='toast-inner'>"+
        "<span class='toast-icon'>I</span>"+
        "<span class='toast-message'>"+message+"</span>"+
        "<button onClick='closeToast()' class='toast-close'>X</button></div>";
    div.style.visibility = "visible";
    document.body.append(div);
}
