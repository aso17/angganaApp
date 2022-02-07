// detail Employees
const detaill = document.querySelector("#employe");
detaill.addEventListener("click", function (e) {
    e.preventDefault;
    let namaEmployee = detaill.getAttribute("data-namaa");
    let nip = detaill.getAttribute("data-nip");
    let phone = detaill.getAttribute("data-phone");
    let addres = detaill.getAttribute("data-addres");
    let jamMasukk = detaill.getAttribute("data-jamMasukk");
    let jamKeluarr = detaill.getAttribute("data-jamKeluarr");
    let ldd = detaill.getAttribute("data-ldd");
    let lgg = detaill.getAttribute("data-lgg");
    let ldOutt = detaill.getAttribute("data-ldOutt");
    let lgOutt = detaill.getAttribute("data-lgOutt");

    const listInn = document.querySelectorAll("#listInn");

    listInn[0].textContent = jamMasukk;
    listInn[1].textContent = `latitude ${ldd}`;
    listInn[2].textContent = `longitude ${lgg}`;

    const listOutt = document.querySelectorAll("#listOutt");
    listOutt[0].textContent = jamKeluarr;
    listOutt[1].textContent = `latitude ${ldOutt}`;
    listOutt[2].textContent = `longitude ${lgOutt}`;

    const listEmp = document.querySelectorAll("#listEmp");
    listEmp[0].textContent = nip;
    listEmp[1].textContent = namaEmployee;
    listEmp[2].textContent = addres;
    listEmp[3].textContent = phone;
});
