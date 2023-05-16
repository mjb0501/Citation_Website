function checkValues() {
    let error = "You are";
    let flag = true;

    let fn = document.getElementById("First Name");
    if (fn.value == "") {
        error = error.concat("\nMissing First Name");
        flag = false;
    }

    let ln = document.getElementById("Last Name");
    if (ln.value == "") {
        error = error.concat("\nMissing Last Name");
        flag = false;
    }

    let tl = document.getElementById("Title");
    if (tl.value == "") {
        error = error.concat("\nMissing Book Title");
        flag = false;
    }

    let ct = document.getElementById("City");
    if (ct.value == "") {
        error = error.concat("\nMissing City of Publication");
        flag = false;
    }

    let pb = document.getElementById("Publisher");
    if (pb.value == "") {
        error = error.concat("\nMissing Publisher");
        flag = false;
    }

    let yr = document.getElementById("Year");
    if (yr.value == "") {
        error = error.concat("\nMissing Publication Date");
        flag = false;
    }

    error = error.concat(".\nClick confirm if you are ok missing these pieces in your citation otherwise click cancel.")
    if (!flag) {
        if (confirm(error) == true) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return true;
    }
}


window.onload = function() {
    document.getElementById("submit").onclick = checkValues;
}
