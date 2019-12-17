function getTotal() {
    let total=0
    let prices = Array.from(document.querySelectorAll(".col-md-1")).forEach(el => {total+=(parseFloat(el.innerText))  });

    document.getElementById("total").innerHTML=total;
}
function removeFromCartAndDelete(el) {
    let id = el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        if (this.responseText) {
            el.parentNode.parentNode.outerHTML = "";
            getTotal()
        }
    }

    form.append("id", id);
    httpr.open("post", `scripts/removeBook.php`);
    httpr.send(form);
}
getTotal();
console.log(parseFloat(document.querySelector(".col-md-1").innerText))