function dodajU(gde,el){
    let id=el.getAttribute('data-id');
    let forma = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        alert((this.responseText));
    }
    
    forma.append("id",id);
    httpr.open("post", `dodaju${gde.trim()}.php`);
    httpr.send(forma);
}

function ukloniIzKorpe(el){
    let id=el.getAttribute('data-id');
    let forma = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        alert((this.responseText));
    }
    
    forma.append("id",id);
    httpr.open("post", `ukloniknjigu.php`);
    httpr.send(forma);
}