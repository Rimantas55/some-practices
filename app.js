function addDnDHandlers () {

	var coffeeimages = document.getElementsByClassName('productarticlewide'); /*take actuals images of coffe*/

	var shoppingCartDropzone = document.getElementById("shoppingcart"); /*this shoppingcart is a div on which you can drop selected iteam/ inside that div should be some kind <ul>*/
	var shoppingcart = document.querySelectorAll("#shoppingcart ul")[0];

	for (var i = 0; i < coffeeimages.length; i++) {
		 coffeeimages[i].addEventListener("dragstart", function (ev) {
		 	ev.dataTransfer.effectAllowed = "copy";
		 	ev.dataTransfer.setData("Text", this.getAttribute("id"));
		 }, false);
	}

	shoppingCartDropzone.addEventListener("dragover", function (ev) {
		if (ev.preventDefault)
			ev.preventDefault();
		ev.dataTransfer.dropEffect = "copy";
		return false;
	}, false);

	shoppingCartDropzone.addEventListener("drop", function (ev) {
		if (ev.stopPropagation)
			ev.stopPropagation();

		var coffeeId = ev.dataTransfer.getData("Text");
		var element = document.getElementById(coffeeId); /*cia gal reikejo kabuciu bet gal pamirso?*/

		addCoffeeToShoppingCart(element, coffeeId);
		ev.stopPropagation();

		return false;
	}, false);

	function addCoffeeToShoppingCart(item, id) {
		var html = id + " " + item.getAttribute("data-price");

		var liElement = document.createElement("li");
		liElement.innerHTML = html;
		shoppingcart.appendChild(liElement);
	}
}