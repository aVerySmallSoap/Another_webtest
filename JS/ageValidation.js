function sanitize(){
    let input = document.getElementById("age-input").value;
    let badge = document.querySelector(".badge");
    if(input === "" || input === null){
        badge.style.visibility = "visible";
        openToast("invalid input");
        return false;
    }
    badge.style.visibility = "hidden";
    return true;
}