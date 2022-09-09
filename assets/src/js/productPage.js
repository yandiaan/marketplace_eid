const quantity = document.getElementById("quantity");

const increment = document.getElementById("increment");
const decrement = document.getElementById("decrement");

increment.addEventListener("click", () => {
	decrement.removeAttribute("disabled");

	let val = parseInt(quantity.innerHTML);
	val += 1;
	quantity.innerHTML = val;
});

decrement.addEventListener("click", () => {
	if (quantity.innerHTML == 1) {
		decrement.setAttribute("disabled", true);
	}

	let val = parseInt(quantity.innerHTML);
	if (val > 1) {
		val -= 1;
	}
	quantity.innerHTML = val;
});
