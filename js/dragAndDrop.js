//dodaj proveru za fajl
window.onload = () => {
    let forma = new FormData()
    let httpr= new XMLHttpRequest()
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
        dodajSliku(files)

    })
    //na klik dugmeta
    document.querySelector("input[name='slika']").addEventListener('change',function(e){
        dodajSliku(this.files)
    })

    function dodajSliku(files) {
        let placeholderSlika=document.querySelector('#slikaZaProveru')
        if (files[0]) {
            var reader = new FileReader(files[0]);
            reader.onload = function (e) {
                placeholderSlika.setAttribute("src",e.target.result);
                dropArea.innerHTML += '<p>' + files[0].name + '</p>';
            };
            reader.readAsDataURL(files[0])
            forma.append("file",files[0])
        }
    }

    document.querySelector("#btn_dodajKnjigu").addEventListener("click",()=>{
        //odradi ostatak validacije
        httpr.open("post","dodavanje.php");
        httpr.send(forma)
        httpr.onload = function(){
            console.log(this.responseText)
        }
    })

}
