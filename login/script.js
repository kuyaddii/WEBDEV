var selectedRow = null;

function showAlert(message, className){
    const div = document.createElement("div");
    div.className = `alert alert-${className}`;

    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div, main);

    setTimeout(() => document.querySelector(".alert").remove(), 3000);
}


// Clear fields

function clearFields(){
    document.querySelector("#bikenumber").value = "";
    document.querySelector("#bikename").value = "";
    document.querySelector("#bikeprice").value = "";
    document.querySelector("#quantity").value = "";
}


// Add

document.querySelector("#bike-form").addEventListener("submit", (e) =>{
    e.preventDefault();

    const bikenumber = document.querySelector("#bikenumber").value;
    const bikename = document.querySelector("#bikename").value;
    const bikeprice = document.querySelector("#bikeprice").value;
    const quantity = document.querySelector("#quantity").value;

    if(bikenumber == "" || bikename == "" || bikeprice == "" || quantity == ""){
        showAlert("Please fill in all fields", "danger");
    }
    else if(selectedRow == null){
        const list = document.querySelector("#bike-list");
        const row = document.createElement("tr");

        row.innerHTML = `
        <td>${bikenumber}</td>
        <td>${bikename}</td>
        <td>${bikeprice}</td>
        <td>${quantity}</td>
        <td>
            <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
            <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
        </td>
     `;
     list.appendChild(row);
     selectedRow = null;
     showAlert("Bike Data Added!", "success");
    }
    else{
        selectedRow.children[0].textContent = bikenumber;
        selectedRow.children[1].textContent = bikename;
        selectedRow.children[2].textContent = bikeprice;
        selectedRow.children[3].textContent = quantity;
        selectedRow = null;
        showAlert("Bike Data Updated!", "info");
    }

    clearFields();

});

// Edit

document.querySelector("#bike-list").addEventListener("click", (e) =>{
    target = e.target;

    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#bikenumber").value = selectedRow.children[0].textContent;
        document.querySelector("#bikename").value = selectedRow.children[1].textContent;
        document.querySelector("#bikeprice").value = selectedRow.children[2].textContent;
        document.querySelector("#quantity").value = selectedRow.children[3].textContent;
    }
})

// Delete

document.querySelector("#bike-list").addEventListener("click", (e) =>{
        target = e.target;
        if(target.classList.contains("delete")){
            target.parentElement.parentElement.remove();
            showAlert("Bike Data Delete", "danger");
        }
    });

