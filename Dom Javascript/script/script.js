var items = [
    [
        "001",
        "Keyboard Logitek",
        60000,
        "Keyboard yang mantap untuk kantoran",
        "logitek.jpg",
    ],
    ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "msi.jpg"],
    [
        "003",
        "Mouse Genius",
        50000,
        "Mouse Genius biar lebih pinter",
        "genius.jpeg",
    ],
    ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "jerry.jpg"],
];

var listBarang = document.querySelector("#listBarang");

for (var item of items) {
    listBarang.innerHTML += `<div class="card col-md-3 mt-2 ml-5">
                <img src="img/${item[4]}" class="card-img-top" alt="${item[1]}">
                <div class="card-body">
                    <h5 class="card-title" id="${item[0]}">${item[1]}</h5>
                    <p class="card-text" id="itemDesc">${item[3]}</p>
                    <p class="card-text">Rp ${item[2]}</p>
                    <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                </div>
            </div>`;
}

var form = document.querySelector("#formItem");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    listBarang.innerHTML = ""

    var keyword = document.querySelector("#keyword").value;

    filtered = items.filter(function (str) {
        return str[1].toUpperCase().includes(keyword.toUpperCase());
    });

    for (var item of filtered) {
        listBarang.innerHTML += `<div class="card col-md-3 mt-2 ml-5">
                <img src="img/${item[4]}" class="card-img-top img-fluid" alt="${item[1]}">
                <div class="card-body">
                    <h5 class="card-title" id="${item[0]}">${item[1]}</h5>
                    <p class="card-text" id="itemDesc">${item[3]}</p>
                    <p class="card-text">Rp ${item[2]}</p>
                    <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                </div>
            </div>`;
    }
});

var cart = document.querySelector(".cart");

listBarang.addEventListener("click", function (e) {
    if (e.target.id == "addCart") {
        var lama = parseInt(cart.innerHTML)
        cart.innerHTML = (lama + 1);



    }
})