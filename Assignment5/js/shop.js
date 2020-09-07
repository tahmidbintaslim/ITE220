var shop = {
    customerName: "Tahmid",
    totalPrice: 0,
    products: [
        "Pizza",
        "Naan",
        "Sourdough",
        "Foccacia",
        "iPhone X"
    ],
    price: [40, 10, 20, 80, 1000],

    displayCustomerName: function() {
        var customerElement = document.getElementById("customer-name");
        customerElement.innerHTML = this.customerName;
    },

    displayProductList: function() {
        var productsText = "";
        var productElement = document.getElementById("product-list");

        for (var i = 0; i < 5; i++) {
            productsText = productsText + "<li class='list-group-item'>" + this.products[i] +
                "<span class='badge badge-pill badge-secondary float-right'>$" + this.price[i] + "</span></li>"
        }

        productElement.innerHTML = productsText;
    },

    calculateTotalPrice: function() {
        var totalPrice = 0;
        var totalPriceElemet = document.getElementById("price");

        for (var j = 0; j < 5; j++) {
            totalPrice += this.price[j];
        }

        totalPrice -= totalPrice / 4;
        totalPriceElemet.innerHTML = "$" + totalPrice;
    }
}

shop.displayCustomerName();
shop.displayProductList();
shop.calculateTotalPrice();


// var customername = "Chaky";
// var price = 10;
// var quantity = 3;
// var totalPrice = 0;

// var products = [
//     "Pizza",
//     "Naan",
//     "Sourdough",
//     "Foccacia",
//     "iPhone X"
// ];

// var prices = [40,10,20,80,1000];
// var productText = "";
// var productElement = document.getElementById("product-list");

// for (i = 0; i < products.length; i++) {

//     productText = productText + "<li class='list-group-item'>" + products[i] + "<span class='badge badge-pill badge-secondary float-right'>$" 
//     + prices[i] + "</span></li>";

//     totalPrice += prices[i];

//     productElement.innerHTML = productText;

// }

// totalPrice -= totalPrice/4;

// var greeting = "";
// var hour = new Date().getHours();

// if (hour < 13) {
//     greeting = "Good morning";
// } else if (hour >= 13 && hour < 17) {
//     greeting = "Good afternoon";
// } else {
//     greeting = "Good evening";
// }

// document.getElementById("greeting").innerHTML = greeting;


// document.getElementById("customer-name").innerHTML = customername;
// document.getElementById("price").innerHTML = "$" + totalPrice;