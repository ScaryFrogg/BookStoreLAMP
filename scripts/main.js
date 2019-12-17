function addToCart(el) {
    let id = el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
   /*  httpr.onload = function () {
        alert((this.responseText));
    } */

    form.append("id", id);
    httpr.open("post", `scripts/addToCart.php`);
    httpr.send(form);
}
function addToFavorites(el) {
    let id = el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        let response = JSON.parse(this.response)
       // console.log(response)
        if (!response["logged"]) {
            document.body.innerHTML += `
            <div class="pop-up-wrapper">
            <div class="pop-up">
            <form method="POST" action="scripts/loginServer.php" class="pop-up-content">
            <h3 class"text-center center-block">Log in to use this feature</h3>

            <label for="email" class="text-center">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="example@books.com" required>

            <label for="password" class="text-center">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>

            <button type="submit" name="btn_login" class="btn btn-primary center-block">Log in</button>
            <button  class="btn btn-primary center-block"><a href="./register.php">Register</a></button>
            <button onclick="popUpCancle()" class="btn btn-warning center-block">Cancle</button>

            </form>
            </div>
            </div>
            `
        } else {
            if (response["success"]) {
                console.log(el)
                el.classList.remove("far");
                el.classList.add("fas");
            } else {
                el.classList.add("far");
                el.classList.remove("fas");
            }
        }
    }

    form.append("id", id);
    httpr.open("post", `scripts/addToFavorites.php`);
    httpr.send(form);
}
function popUpCancle(){
    document.querySelector(".pop-up-wrapper").outerHTML=""
}

 function removeFromCart(el) {
    let id = el.getAttribute('data-id');
    let form = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        if(this.responseText){
           alert("removed successfully")
        }
    }

    form.append("id", id);
    httpr.open("post", `scripts/removeBook.php`);
    httpr.send(form);
}