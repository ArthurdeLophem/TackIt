function vereistenEditAdd() {
    
    let item = document.getElementById("vereisten-selector").value;
    let amount = document.querySelector(".vereisten-hoeveelheid").value;
    let list = document.getElementById("vereisten");
    let liCount = document.querySelectorAll(".vereisten-item-item").length;
    let hiddenCounter = document.getElementById("hiddenCounter");

    var nameNumber = liCount + 1;

    let vereisten = document.createElement("li");
    vereisten.setAttribute("id", "vereisten-li-item-" + nameNumber);
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
    itemInput.setAttribute("id", "vereisten-item-id-" + nameNumber);
    let amountP = document.createElement("p");
    amountP.innerHTML = amount;
    let amountInput = document.createElement("input");
    amountInput.setAttribute("type", "hidden");
    amountInput.setAttribute("value", amount);
    amountInput.setAttribute("class", "vereisten-hoeveelheid-item");
    amountInput.setAttribute("name", "vereisten-hoeveelheid-" + nameNumber);
    amountInput.setAttribute("id", "vereisten-hoeveelheid-id-" + nameNumber);
    let itemRemove = document.createElement("p");
    itemRemove.innerHTML = "verwijderen";
    itemRemove.setAttribute("onclick", "deleteVereisten(" + nameNumber + ")");
    let newItem = document.createElement("input");
    newItem.setAttribute("type", "hidden");
    newItem.setAttribute("value", "true");
    newItem.setAttribute("id", "vereisten-type-id-" + nameNumber);
    vereisten.appendChild(div);
    div.appendChild(itemP);
    div.appendChild(amountP);
    div.appendChild(itemId);
    div.appendChild(itemInput);
    div.appendChild(amountInput);
    div.appendChild(itemRemove);
    div.appendChild(newItem);

    var popup = document.querySelector(".vereisten-popup-show");
    popup.className = "vereisten-popup";

    hiddenCounter.value = nameNumber;


}

function deleteVereisten(e) {

    let item = document.getElementById("vereisten-inner-id-" + e);
    let type = document.getElementById("vereisten-type-id-" + e);

    console.log(e);
    console.log(type);
    console.log(type.value);

   if (type.value == "false") {
    let formData = new FormData();

    formData.append("id", item.value);

    fetch("ajax/deleteVereisten.php", {

        method: "POST",
        body: formData
    })

    .then(response => response.json())
        .then(result => {
            console.log(result);
            let list = document.getElementById("vereisten");
            let child = document.getElementById("vereisten-li-item-" + e);

            list.removeChild(child);

        })
        .catch(error => {
            console.error("Error:", error);
        })
    }

    if (type.value == "true") {

        let list = document.getElementById("vereisten");
        let child = document.getElementById("vereisten-li-item-" + e);

        list.removeChild(child);


    }

}

function saveVereisten() {

var hiddenCounter = document.getElementById("hiddenCounter");
var counter = hiddenCounter.value;

let formData = new FormData();

    for(var i = 1; i <= counter; i++) {

        let item = document.getElementById("vereisten-item-id-" + i);
        let amount = document.getElementById("vereisten-hoeveelheid-id-" + i);

        const vereisten = [item.value, amount.value];
        console.log(vereisten);
        console.log("vereisten[" + i + "]");

        var json_arr = JSON.stringify(vereisten);
        console.log(json_arr);
        formData.append("vereisten[" + i + "]", json_arr);
    }

    console.log(formData);

    fetch("ajax/saveVereisten.php", {

        method: "POST",
        body: formData

    })

    .then(response => response.json())
        .then(result => {
            console.log(result);

        })
        .catch(error => {
            console.error("Error:", error);
        })
    
}

function editDate() {

    var popup = document.getElementById("project-edit-date");
    popup.className = "project-edit-date-show";
    var popupOnne = document.getElementById("project-edit-date-edit");
    popupOnne.className = "project-edit-date-edit-hide";
    var dates = document.querySelectorAll("#project-edit-dates");
    for (var i = 0; i < dates.length; i++) {
        dates[i].className = "hidden";
    }
    var newDateDivs = document.querySelectorAll("#project-edit-dates-input-div");
    for (var i = 0; i < newDateDivs.length; i++) {
        newDateDivs[i].className = "show";
    }
}

function saveDate() {

    var popup = document.getElementById("project-edit-date");
    popup.className = "project-edit-date";
    var popupOnne = document.getElementById("project-edit-date-edit");
    popupOnne.className = "project-edit-date-edit";
    var dates = document.querySelectorAll("#project-edit-dates");
    for (var i = 0; i < dates.length; i++) {
        dates[i].className = "show";
    }
    var newDateDivs = document.querySelectorAll("#project-edit-dates-input-div");
    for (var i = 0; i < newDateDivs.length; i++) {
        newDateDivs[i].className = "hidden";
    }

    let formData = new FormData();

    var newDates = document.querySelectorAll("#project-edit-dates-input");
    for (var i = 0; i < newDates.length; i++) {
        
        formData.append("date-" + i, newDates[i].value);
    }
    fetch("ajax/saveDate.php", {

        method: "POST",
        body: formData

    })

    .then(response => response.json())
    .then(result => {
        console.log(result);
        let date1 = document.getElementById("project-edit-dates-1");
        let date2 = document.getElementById("project-edit-dates-2");
        let date3 = document.getElementById("project-edit-dates-3");
        let date4 = document.getElementById("project-edit-dates-4");
        let date5 = document.getElementById("project-edit-dates-5");
        date1.innerHTML = result.date1;
        date2.innerHTML = result.date2;
        date3.innerHTML = result.date3;
        date4.innerHTML = result.date4;
        date5.innerHTML = result.date5;
    })
    .catch(error => {
        console.error("Error:", error);
    })

}

function editType() {
    var p = document.getElementById("type-edit-p");
    p.className = "hidden";
    var input = document.getElementById("type-edit-input");
    input.className = "show";
    var edit = document.getElementById("type-edit-edit");
    edit.className = "hidden";
    var save = document.getElementById("type-edit-save");
    save.className = "wrench show";
}

function saveType() {
    var p = document.getElementById("type-edit-p");
    p.className = "show";
    var input = document.getElementById("type-edit-input");
    input.className = "hidden";
    var edit = document.getElementById("type-edit-edit");
    edit.className = "wrench show";
    var save = document.getElementById("type-edit-save");
    save.className = "hidden";

    let formData = new FormData();

    formData.append("type", input.value);

    fetch("ajax/saveType.php", {

        method: "POST",
        body: formData

    })

    .then(response => response.json())
    .then(result => {
        console.log(result);

        p.innerHTML = result.type;
    })
    .catch(error => {
        console.error("Error:", error);
    })

}

function editBudget() {
    var p = document.getElementById("budget-edit-p");
    p.className = "hidden";
    var input = document.getElementById("budget-edit-input");
    input.className = "show";
    var edit = document.getElementById("budget-edit-edit");
    edit.className = "hidden";
    var save = document.getElementById("budget-edit-save");
    save.className = "wrench show";
}

function saveBudget() {
    var p = document.getElementById("budget-edit-p");
    p.className = "show";
    var input = document.getElementById("budget-edit-input");
    input.className = "hidden";
    var edit = document.getElementById("budget-edit-edit");
    edit.className = "wrench show";
    var save = document.getElementById("budget-edit-save");
    save.className = "hidden";

    let formData = new FormData();

    formData.append("budget", input.value);

    fetch("ajax/saveBudget.php", {

        method: "POST",
        body: formData

    })

    .then(response => response.json())
    .then(result => {
        console.log(result);

        p.innerHTML = result.budget;
    })
    .catch(error => {
        console.error("Error:", error);
    })



}
