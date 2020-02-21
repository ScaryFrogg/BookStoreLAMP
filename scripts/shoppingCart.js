function getTotal() {
    let total=0
    let prices = Array.from(document.querySelectorAll(".col-md-1")).forEach(el => {
        total+=(parseFloat(el.querySelector("#single").innerText)*parseFloat(el.querySelector("#qt").innerText))
        el.querySelector("#price").innerHTML=(parseFloat(el.querySelector("#single").innerText)*parseFloat(el.querySelector("#qt").innerText));
    });

    document.getElementById("total").innerHTML=total.toFixed(2);
}
function removeFromCartAndDelete(el) {
    let id = el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        if (this.responseText) {
            if(this.responseText=='delete'){
                el.parentNode.parentNode.outerHTML=""
            }else{
            el.parentNode.parentNode.querySelector('#qt').innerText = this.responseText;
            }
            getTotal()
        }
    }

    form.append("id", id);
    httpr.open("post", `scripts/removeBook.php`);
    httpr.send(form);
}
function checkOut(){
    let els =Array.from(document.querySelectorAll("a[data-id]")).map(el=>(el.getAttribute('data-id')))
    let ids=els.join("_")
    window.location.href=`/checkOut.php?ids=${ids}`;
   
}
getTotal();