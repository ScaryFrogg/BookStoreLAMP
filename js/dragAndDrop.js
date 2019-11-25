window.onload = () => {
    let dropArea = document.querySelector('#drop-area')

    dropArea.addEventListener('dragenter', dragFja, false)
    dropArea.addEventListener('dragleave', dragleaveFja, false)
    dropArea.addEventListener('dragover', dragoverFja, false)
    dropArea.addEventListener('drop', dropFja, false)

    console.log(dropArea)
};
function dragFja(){
    dropArea.classList.add('highlight')
}
function dragoverFja(){
    dropArea.classList.add('highlight')
}
function dropFja(){
    dropArea.classList.remove('highlight')
}
function dragleaveFja(){
    dropArea.classList.remove('highlight')
}
