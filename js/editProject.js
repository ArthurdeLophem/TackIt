function vereistenEditAdd() {
    
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
    let itemId = document.createElement("input");
    itemId.setAttribute("type", "hidden");
    itemId.setAttribute("value", item);
    itemId.setAttribute("id", "vereisten-inner-id-" + nameNumber);
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
    let itemRemove = document.createElement("p");
    itemRemove.innerHTML = "verwijderen";
    itemRemove.setAttribute("onclick", "deleteVereisten(" + nameNumber + ")");
    vereisten.appendChild(div);
    div.appendChild(itemP);
    div.appendChild(amountP);
    div.appendChild(itemId);
    div.appendChild(itemInput);
    div.appendChild(amountInput);
    div.appendChild(itemRemove);

    var popup = document.querySelector(".vereisten-popup-show");
    popup.className = "vereisten-popup";

    hiddenCounter.value = nameNumber;


}