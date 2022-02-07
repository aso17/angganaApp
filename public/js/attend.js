const detail = document.querySelector("#attend");
detail.addEventListener("click", function () {
    let namaEmployee = detail.getAttribute("data-nama");
    let jamMasuk = detail.getAttribute("data-jamMasuk");
    let jamKeluar = detail.getAttribute("data-jamKeluar");
    let ld = detail.getAttribute("data-ld");
    let lg = detail.getAttribute("data-lg");
    let ldOut = detail.getAttribute("data-ldOut");
    let lgOut = detail.getAttribute("data-lgOut");
    const listIn = document.querySelectorAll("#listIn");
    listIn[0].textContent = namaEmployee;
    listIn[1].textContent = jamMasuk;
    listIn[2].textContent = `latitude ${ld}`;
    listIn[3].textContent = `longitude ${lg}`;

    const listOut = document.querySelectorAll("#listOut");
    listOut[0].textContent = jamKeluar;
    listOut[1].textContent = `latitude ${ldOut}`;
    listOut[2].textContent = `longitude ${lgOut}`;
});
