function dodajUListuZelja(e){
    let id=e.getAttribute('data-id');
    let forma = new FormData();
    let httpr = new XMLHttpRequest();
    httpr.onload = function () {
        alert((this.responseText));
    }
    
    forma.append("id",id);
    httpr.open("post", "dodajuzelje.php");
    httpr.send(forma);
}