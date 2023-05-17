function checkValues() {
    let error = "You are";
    let flag = true;

    let fn = document.getElementById("First Name");
    if (fn.value == "") {
        error = error.concat("\nMissing First Name");
        flag = false;
    }
    else {
        fn.value = fn.value.concat(". ");
    }

    let ln = document.getElementById("Last Name");
    if (ln.value == "") {
        error = error.concat("\nMissing Last Name");
        flag = false;
    }
    else {
        ln.value = ln.value.concat(", ");
    }

    let tl = document.getElementById("Title");
    if (tl.value == "") {
        error = error.concat("\nMissing Book Title");
        flag = false;
    }
    else {
        tl.value = "<i>" + tl.value + "</i>.";
    }

    let ct = document.getElementById("City");
    if (ct.value == "") {
        error = error.concat("\nMissing City of Publication");
        flag = false;
    }
    else {
        ct.value = ct.value.concat(", ");
    }

    let pb = document.getElementById("Publisher");
    if (pb.value == "") {
        error = error.concat("\nMissing Publisher");
        flag = false;
    }
    else {
        pb.value = pb.value.concat(", ");
    }

    let yr = document.getElementById("Year");
    if (yr.value == "") {
        error = error.concat("\nMissing Publication Date");
        flag = false;
    }
    else {
        yr.value = yr.value.concat(".");
    }

    error = error.concat(".\nClick confirm if you are ok missing these pieces in your citation otherwise click cancel.")
    if (!flag) {
        if (confirm(error) == true) {
            displayCitation();
            return true;
        }
        else {
            return false;
        }
    }
    else {
        displayCitation();
        return true;
    }
}

function displayCitation() {
    let display = document.getElementById("citations");
    let fn = document.getElementById("First Name");
    let ln = document.getElementById("Last Name");
    let tl = document.getElementById("Title");
    let ct = document.getElementById("City");
    let pb = document.getElementById("Publisher");
    let yr = document.getElementById("Year");

    let citation = ln.value + fn.value + tl.value + ct.value
        + pb.value + yr.value;

    display.innerHTML = citation;
    fn.value = "";
    ln.value = "";
    tl.value = "";
    ct.value = "";
    pb.value = "";
    yr.value = "";

}

window.onload = function() {
    document.getElementById("submit").onclick = checkValues;
}
