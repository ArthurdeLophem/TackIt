function vereistenPopupShow() {
    var popup = document.getElementById("vereisten-popup");
    popup.className = "vereisten-popup-show";
}

function vereistenPopupHide() {
    var popup = document.querySelector(".vereisten-popup-show");
    popup.className = "vereisten-popup";
}

function vereistenAdd() {
    
    let item = document.getElementById("vereisten-selector").value;
    let amount = document.querySelector(".vereisten-hoeveelheid").value;
    let list = document.getElementById("vereisten");
    let liCount = document.querySelectorAll(".vereisten-item-item").length;
    let hiddenCounter = document.getElementById("hiddenCounter");

    var nameNumber = liCount + 1;

    let vereisten = document.createElement("li");
    list.appendChild(vereisten);
    let div = document.createElement("div");
    let itemP = document.createElement("p");
    itemP.innerHTML = item;
    let itemInput = document.createElement("input");
    itemInput.setAttribute("type", "hidden");
    itemInput.setAttribute("value", item);
    itemInput.setAttribute("class", "vereisten-item-item");
    itemInput.setAttribute("name", "vereisten-item-" + nameNumber);
    let amountP = document.createElement("p");
    amountP.innerHTML = amount;
    let amountInput = document.createElement("input");
    amountInput.setAttribute("type", "hidden");
    amountInput.setAttribute("value", amount);
    amountInput.setAttribute("class", "vereisten-hoeveelheid-item");
    amountInput.setAttribute("name", "vereisten-hoeveelheid-" + nameNumber);
    vereisten.appendChild(div);
    div.appendChild(itemP);
    div.appendChild(amountP);
    div.appendChild(itemInput);
    div.appendChild(amountInput);

    var popup = document.querySelector(".vereisten-popup-show");
    popup.className = "vereisten-popup";

    hiddenCounter.value = nameNumber;


}