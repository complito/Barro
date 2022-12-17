function submitHandler(e) {
    e.preventDefault();
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() { 
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            if (request.responseText == "openedRequests.php" || request.responseText == "index.php")
                document.location.href = request.responseText;
            else if (/^\d+$/.test(request.responseText))
                document.getElementById(request.responseText).remove();
            else
                document.getElementById("submitResponse").innerHTML = request.responseText;
        }
    }
    request.open(this.method, this.action, true);
    var data = new FormData(this);
    request.send(data);
}

document.querySelectorAll("form").forEach(item => item.addEventListener("submit", submitHandler));