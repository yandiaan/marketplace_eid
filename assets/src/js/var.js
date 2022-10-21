const ENDPOINT = "http://localhost:8888/api/";
const BASE_URL = "http://localhost:8888";

let token = $.cookie("sessionToken");
let tokenSuplier = $.cookie("sessionTokenSuplier");

const idr = new Intl.NumberFormat("id", {
	style: "currency",
	currency: "IDR",
});

function rupiah(number) {
	return idr.format(number).replace(/,00/, "");
}
