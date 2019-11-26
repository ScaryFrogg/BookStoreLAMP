//dodaj proveru za fajl
window.onload = () => {
    let dropArea = document.querySelector('#drop')

    dropArea.addEventListener('dragleave', function (e) {

        e.preventDefault();
        e.stopPropagation();
    })
    dropArea.addEventListener('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
    })
    dropArea.addEventListener('drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
        let dt = e.dataTransfer
        let files = dt.files
        readFile(files);

    })
    //dropArea.addEventListener('change', readFile(this), false)

    function readFile(input) {
        console.log(input)
        if (input && input[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                let htmlPreview =
                    '<img width="200" src="' + e.target.result + '" />' +
                    '<p>' + input[0].name + '</p>';
                dropArea.innerHTML += htmlPreview
            };

            reader.readAsDataURL(input[0]);
        }
    }


}
