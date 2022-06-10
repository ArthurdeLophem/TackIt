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

function addInfo() {

    let list = document.getElementById("infoList");
    let infoCount = document.getElementById("infoCount");

    newCount = parseInt(infoCount.value) + 1;

    infoCount.setAttribute("value", newCount);

    let newItem = document.createElement("li");
    newItem.setAttribute("class", "info-item");
    newItem.setAttribute("id", "info-item-" + newCount);
    list.appendChild(newItem);
    let newItemInput = document.createElement("input");
    newItemInput.setAttribute("type", "text");
    newItemInput.setAttribute("name", "info-text-item-" + newCount);
    newItemInput.setAttribute("placeholder", "Name of item");
    newItemInput.setAttribute("class", "info-text-item");
    newItemInput.setAttribute("id", "info-text-item-" + newCount);
    let inputLabel = document.createElement("label");
    inputLabel.setAttribute("for", "info-file-item-" + newCount);
    inputLabel.innerHTML = "Uploaden";
    inputLabel.setAttribute("class", "info-label-item");
    inputLabel.setAttribute("id", "info-label" + newCount);
    let inputFile = document.createElement("input");
    inputFile.setAttribute("type", "file");
    inputFile.setAttribute("name", "info-file-item-" + newCount);
    inputFile.setAttribute("class", "info-file-item");
    inputFile.setAttribute("id", "info-file-item-" + newCount);
    let confirm = document.createElement("p");
    confirm.setAttribute("class", "info-confirm");
    confirm.innerHTML = "Bevestigen";
    confirm.setAttribute("onclick", "confirmInfo(" + newCount + ")");
    confirm.setAttribute("id", "info-confirm-" + newCount);
    let remove = document.createElement("p");
    remove.setAttribute("class", "info-remove-item");
    remove.innerHTML = "annuleren";
    remove.setAttribute("onclick", "removeInfo(" + newCount + ")");
    remove.setAttribute("id", "info-remove-" + newCount);
    newItem.appendChild(newItemInput);
    newItem.appendChild(inputLabel);
    newItem.appendChild(inputFile);
    newItem.appendChild(confirm);
    newItem.appendChild(remove);
}

function removeInfo(id) {

    let liCount = document.querySelectorAll(".info-item").length;

        console.log(liCount);
    if (liCount > 1) {
        console.log('yes');
        let list = document.getElementById("infoList");
        let child = document.getElementById("info-item-" + id);

        list.removeChild(child);

        let infoCount = document.getElementById("infoCount");
        newCount = parseInt(infoCount.value) - 1;

        infoCount.setAttribute("value", newCount);


        for(let i = id + 1; i < liCount + 1; i++) {
        
        let item = document.getElementById("info-item-" + i);
        console.log(item);
        item.setAttribute("id", "info-item-" + (i-1));   
        console.log(item);
        let itemInput = document.getElementById("info-text-item-" + i);
        itemInput.setAttribute("name", "info-text-item-" + (i-1));
        itemInput.setAttribute("id", "info-text-item-" + (i-1));
        let itemFile = document.getElementById("info-file-item-" + i);
        itemFile.setAttribute("name", "info-file-item-" + (i-1));
        itemFile.setAttribute("id", "info-file-item-" + (i-1));
        let itemLabel = document.getElementById("info-label" + i);
        itemLabel.setAttribute("for", "info-file-item-" + (i-1));
        itemLabel.setAttribute("id", "info-label" + (i-1));
        let itemConfirm = document.getElementById("info-confirm-" + i);
        itemConfirm.setAttribute("onclick", "confirmInfo(" + (i-1) + ")");
        itemConfirm.setAttribute("id", "info-confirm-" + (i-1));
        let itemRemove = document.getElementById("info-remove-" + i);
        itemRemove.setAttribute("onclick", "removeInfo(" + (i-1) + ")");
        itemRemove.setAttribute("id", "info-remove-" + (i-1));
    }
}

    else {
        console.log('no');


    let list = document.getElementById("infoList");
    let child = document.getElementById("info-item-" + id);

    list.removeChild(child);

    let infoCount = document.getElementById("infoCount");
    newCount = parseInt(infoCount.value) - 1;

    infoCount.setAttribute("value", newCount);
}




}