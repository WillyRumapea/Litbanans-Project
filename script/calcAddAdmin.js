const hargaProduk = {
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

function priceCalc() {
  const produk = document.getElementById("produk").value;
  const rasa = document.getElementById("rasa").value;
  const toppingProduk = document.getElementById("topping").value;
  const porsi = parseInt(document.getElementById("porsi").value || 0);
  const harga = document.getElementById("harga");

  if (rasa && produk) {
    const hargaBarang = hargaProduk[produk][rasa];
    const hargaToping = topping[toppingProduk];
    const hargaTotal = (hargaBarang + hargaToping) * porsi;

    harga.value = hargaTotal;
    console.log(harga.value);
  } else {
    harga.value = "";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const pilihProduk = document.getElementById("produk");
  const pilihRasa = document.getElementById("rasa");
  const pilihTopping = document.getElementById("topping");
  const pilihPorsi = document.getElementById("porsi");

  pilihProduk.addEventListener("change", priceCalc);
  pilihRasa.addEventListener("change", priceCalc);
  pilihPorsi.addEventListener("input", priceCalc);
  pilihTopping.addEventListener("change", priceCalc);

  const harga = document.getElementById("harga");
  harga.addEventListener("change", priceCalc);
});

const buttonCancel = document.querySelector(".cancel-button");
buttonCancel.addEventListener("click", () => {
  document.location.href = "dashboard.php";
});
