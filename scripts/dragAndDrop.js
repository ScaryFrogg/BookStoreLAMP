//dodaj proveru za fajl
window.onload = () => {
    let form = new FormData()
    let httpr = new XMLHttpRequest()
    let dropArea = document.querySelector('#drop')

    //na drag and drop TODO klase za 
    dropArea.addEventListener('dragleave', function (e) {

    })
    dropArea.addEventListener('dragover', function (e) {
        e.preventDefault();
    })
    dropArea.addEventListener('drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
        let dt = e.dataTransfer
        let files = dt.files
        addImage(files)
        console.log(files)

    })
    //on click upload
    document.querySelector("input[name='img_src']").addEventListener('change', function (e) {
        addImage(this.files)
    })

    function addImage(files) {
        let placeholderimg_src = document.querySelector('#img_srcZaProveru')
        if (files[0]) {
            var reader = new FileReader(files[0]);
            reader.onload = function (e) {
                placeholderimg_src.setAttribute("src", e.target.result);
                dropArea.innerHTML = '<p>' + files[0].name + '</p>';
            };
            reader.readAsDataURL(files[0])
            form.append("file", files[0])
        }
    }

    document.querySelector("#btn_dodajKnjigu").addEventListener("click", () => {
        //odradi ostatak validacije
        httpr.onload = function () {
            alert(this.responseText);
        }
        let title = document.querySelector('input[name="title"]').value;
        form.append("title", title);
        let author = document.querySelector('input[name="author"]').value;
        form.append("author", author);
        let about = document.querySelector('textarea[name="about"]').value;
        form.append("about", about);
        let categories = document.querySelector('input[name="categories"]').value;
        form.append("categories", categories);
        let price = document.querySelector('input[name="price"]').value;
        form.append("price", price);
        let format = document.querySelector('input[name="format"]').value;
        form.append("format", format);
        let pages = document.querySelector('input[name="pages"]').value;
        form.append("pages", pages);
        let relese = document.querySelector('input[name="relese"]').value;
        form.append("relese", relese);
        let discount = document.querySelector('input[name="discount"]').value;
        form.append("discount", discount);
        
        httpr.open("post", "./scripts/dodavanje.php");
        httpr.send(form);
    })

}
