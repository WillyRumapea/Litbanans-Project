const hargaProdukUpdate = {
  pisang_lumer: {
    coklat: 10000,
    tiramisu: 13000,
    greentea: 13000,
    strawberry: 13000,
    cappucino: 13000,
    mix_2_rasa: 15000,
  },
  banana_rolls: {
    coklat: 10000,
    tiramisu: 10000,
    greentea: 10000,
    strawberry: 10000,
    cappucino: 10000,
    mix_2_rasa: 12000,
  },
};

const topping = {
  oreo: 2000,
  keju: 3000,
  chococip: 2000,
  redvelvet: 3000,
  almond: 3000,
  meises: 1000,
  springkles: 2000,
};

function priceCalcUpd() {
  const produkUpdate = document.getElementById("produk").value;
  const rasaUpdate = document.getElementById("rasa").value;
  const toppingProdukUpdate = document.getElementById("topping").value;
  const porsiUpdate = parseInt(document.getElementById("porsi").value || 0);
  const hargaUpdate = document.getElementById("harga");

  if (rasaUpdate && produkUpdate) {
    const hargaBarangUpdate = hargaProdukUpdate[produkUpdate][rasaUpdate];
    const hargaTopingUpdate = topping[toppingProdukUpdate];
    const hargaTotalUpdate =
      (hargaBarangUpdate + hargaTopingUpdate) * porsiUpdate;

    hargaUpdate.value = hargaTotalUpdate;
    console.log(harga.value);
  } else {
    harga.value = "";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const pilihProdukUpdate = document.getElementById("produk");
  const pilihRasaUpdate = document.getElementById("rasa");
  const pilihToppingUpdate = document.getElementById("topping");
  const pilihPorsiUpdate = document.getElementById("porsi");

  pilihProdukUpdate.addEventListener("change", priceCalcUpd);
  pilihRasaUpdate.addEventListener("change", priceCalcUpd);
  pilihPorsiUpdate.addEventListener("input", priceCalcUpd);
  pilihToppingUpdate.addEventListener("change", priceCalcUpd);

  const harga = document.getElementById("harga");
  harga.addEventListener("change", priceCalcUpd);
});

const buttonCancel = document.querySelector(".button-cancel");
buttonCancel.addEventListener("click", () => {
  document.location.href = "dashboard.php";
});
