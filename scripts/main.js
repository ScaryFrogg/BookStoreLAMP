function addToCart(el){
    let id=el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        alert((this.responseText));
    }
    
    form.append("id",id);
    httpr.open("post", `addToCart.php`);
    httpr.send(form);
}
function addToFavorites(el){
    let id=el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        let response =JSON.parse(this.response)
        console.log(response)
        if(!response["logged"]){
            alert("Please log in to use favorites")
        }else{
            if(response["success"]){
                console.log(el)
                el.classList.remove("far");
                el.classList.add("fas");
            }else{
                el.classList.add("far");
                el.classList.remove("fas");
            }
        }
    }
    
    form.append("id",id);
    httpr.open("post", `addToFavorites.php`);
    httpr.send(form);
}

function ukloniIzKorpe(el){
    let id=el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        alert((this.responseText));
    }
    
    form.append("id",id);
    httpr.open("post", `removeBook.php`);
    httpr.send(form);
}