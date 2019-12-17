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
                dropArea.innerHTML += '<p>' + files[0].name + '</p>';
            };
            reader.readAsDataURL(files[0])
            form.append("file", files[0])
        }
    }

    document.querySelector("#btn_dodajKnjigu").addEventListener("click", () => {
        //odradi ostatak validacije
        httpr.onload = function () {
            console.log(this.responseText);
        }
        let title = document.querySelector('input[name="title"]').value;
        form.append("title", title);
        let author = document.querySelector('input[name="author"]').value;
        form.append("author", author);
        let about = document.querySelector('textarea[name="about"]').value;
        form.append("about", about);
        let categories = document.querySelector('input[name="categories"]').value;
        form.append("categories", categories);
        
        httpr.open("post", "./scripts/dodavanje.php");
        httpr.send(form);
    })

}
