<<<<<<< HEAD
const ENDPOINT = "http://localhost/marketplace_eid/api/";
const BASE_URL = "http://localhost/marketplace_eid/";

let token = $.cookie("sessionToken");
let tokenSuplier = $.cookie("sessionTokenSuplier");

const idr = new Intl.NumberFormat("id", {
	style: "currency",
	currency: "IDR",
});

function rupiah(number) {
	return idr.format(number).replace(/,00/, "");
}
=======
const ENDPOINT = "http://localhost:8080/marketplace_eid/api/";
const BASE_URL = "http://localhost:8080/marketplace_eid";

let token = $.cookie("sessionToken");

const idr = new Intl.NumberFormat("id", {
	style: "currency",
	currency: "IDR",
});

function rupiah(number) {
	return idr.format(number).replace(/,00/, "");
}

function handleStar(rate) {
	let val = rate.toString().split(".");
	let res = [];
	if (val.length > 1) {
		res.push(`<i class="fa fa-star-half-stroke"></i>`);
	}
	for (var i = 0; i < Number(val[0]); i++) {
		res.unshift(`<i class="fa fa-star"></i>`);
	}
	if (res.length < 5) {
		for (var i = res.length; i < 5; i++) {
			res.push(`<i class="fa-regular fa-star"></i>`);
		}
	}
	return res.join("");
}

const showFormattedDate = (date) => {
	const options = {
		weekday: "long",
		year: "numeric",
		month: "long",
		day: "numeric",
	};
	return new Date(date).toLocaleDateString("id-ID", options);
};

// console.log(handleStar(3.5));
>>>>>>> origin/dian
