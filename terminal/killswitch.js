var killswitch = true;

function Iskillswitch() {
    if (killswitch == true) {
        document.body.innerHTML = "<h1>403 Error</h1><p>Forbidden Access</p>";
        document.head.innerHTML = ""
        document.title = "403 Forbidden Access";
    }
}

document.addEventListener("DOMContentLoaded", Iskillswitch);