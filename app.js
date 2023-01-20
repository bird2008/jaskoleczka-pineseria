const menuIcon = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".navbar");
const basketButton = document.getElementById("trolley_img");
const basket = document.getElementById("basket");
const basketContent = document.getElementById("basket_contents");
const xButton = document.querySelector(".x-img");
const right = document.querySelector(".right");
const addItemButton = document.querySelectorAll(".add-item");
const add = document.querySelectorAll(".add");
const addAlert = document.getElementById("add-alert");
const removeAlert = document.getElementById("remove-alert");

menuIcon.addEventListener("click", () => {
	navbar.classList.toggle("change");
});
try {
	basketButton.addEventListener("click", () => {
		if (basket.style.opacity !== "1") {
			basket.style.opacity = "1";
			basketButton.style.opacity = "0";
			xButton.classList.add("right");
		}
	});

	const basketOrderButton = document.getElementById("basket-order");
	if (basketOrderButton) {
		basketOrderButton.addEventListener("click", () => {
			const orderPage = document.getElementById("order-information");
			if (orderPage) {
				orderPage.scrollIntoView({ behavior: "smooth" });
				basket.style.opacity = "0";
				basketButton.style.opacity = "1";
				xButton.classList.remove("right");
			}
		});
	}
	xButton.addEventListener("click", () => {
		if (basket.style.opacity !== "0") {
			basket.style.opacity = "0";
			basketButton.style.opacity = "1";
			xButton.classList.remove("right");
		}
	});

	addItemButton.forEach((button) => {
		button.addEventListener("click", () => {
			const menu = document.getElementById("menu");
			menu.scrollIntoView({ behavior: "smooth" });
		});
	});
} catch (error) {
}
add.forEach((button) => {
	button.addEventListener("click", () => {
		const order = document.getElementById("order");
		let item = button.parentElement.textContent;
		item = item.slice(0, -2);
		const newDiv = document.createElement("div");
		newDiv.classList.add("order-item");
		newDiv.id = "order-item";
		const newContent = document.createTextNode(item);
		newDiv.appendChild(newContent);
		basketContent.appendChild(newDiv);

		const newItem = document.createElement("div");
		newItem.classList.add("order-item");
		newItem.id = "order-item";
		const itemContent = document.createTextNode(item);
		newItem.appendChild(itemContent);
		order.appendChild(newItem);

		const remove = document.createElement("div");
		remove.classList.add("remove");
		const removeContent = document.createTextNode("-");
		remove.appendChild(removeContent);
		remove.id = "removeButton";
		newItem.appendChild(remove);

		addItemButton.forEach((buttons) => {
			buttons.style.display = "none";
		});

		addAlert.style.opacity = "1";
		setTimeout(() => {
			addAlert.style.opacity = "0";
		}, 1000);
	});
});

document.addEventListener("click", () => {
	if (document.getElementById("removeButton")) {
		const removeButton = document.querySelectorAll(".remove");
		removeButton.forEach((button) => {
			button.addEventListener("click", () => {
				const text = button.parentElement.textContent.slice(0, -1);
				button.parentElement.remove();	
				for (const div of basketContent.querySelectorAll("div")) {
					if (div.textContent.includes(text)) {
						div.remove()
					}
				}
				
				if (!document.getElementById("order-item")) {
					addItemButton.forEach((buttons) => {
						buttons.style.display = "flex";
					});
				}
				removeAlert.style.opacity = "1";
				setTimeout(() => {
					removeAlert.style.opacity = "0";
				}, 1000);
			});
		});
	}
});

$(window).scroll(function () {
	if ($(this).scrollTop() > 70) {
		$(".hamburger-menu").css({
			display: "none",
		});
	}
	if ($(this).scrollTop() < 30) {
		$(".hamburger-menu").css({
			display: "flex",
		});
	}
});

$(document).ready(function () {
	$("#order-form").on("submit", function () {
		var hvalue = $("#basket_contents").text().slice(43);
		$(this).append(
			"<input type='hidden' name='zamowienie' value=' " + hvalue + " '/>"
		);
	});
});
