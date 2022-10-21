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
