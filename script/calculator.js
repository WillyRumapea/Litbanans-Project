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

function calculatorHarga() {
  const priceInput = document.getElementById("harga");
  const portionInput = parseInt(document.getElementById("porsi").value || 1);
  const tasteInput = document.getElementById("rasa").value;
  const toppingInput = document.getElementById("topping").value;
  const productInput = document.getElementById("produk").value;

  if (tasteInput && productInput) {
    const priceProduct = hargaProduk[productInput][tasteInput];
    const toppingPrice = topping[toppingInput];
    const totalPrice = (priceProduct + toppingPrice) * portionInput;

    priceInput.value = totalPrice;
  } else {
    priceInput.value = "";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const productSelected = document.getElementById("produk");
  const tasteSelected = document.getElementById("rasa");
  const toppingSelected = document.getElementById("topping");
  const porsiSelected = document.getElementById("porsi");

  productSelected.addEventListener("change", calculatorHarga);
  tasteSelected.addEventListener("change", calculatorHarga);
  toppingSelected.addEventListener("change", calculatorHarga);
  porsiSelected.addEventListener("input", calculatorHarga);

  const priceInput = document.getElementById("harga");
  priceInput.addEventListener("change", () => {
    calculatorHarga();
  });
});
