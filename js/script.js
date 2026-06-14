let cart = JSON.parse(localStorage.getItem("cart")) || [];

/* ADD TO CART */

const addButtons = document.querySelectorAll(".add-cart");

addButtons.forEach(button => {

button.addEventListener("click", () => {

const product = {

id: button.dataset.id,
name: button.dataset.name,
price: parseInt(button.dataset.price),
image: button.dataset.image,
quantity: 1

};

const existing = cart.find(item => item.id === product.id);

if(existing){

existing.quantity++;

}else{

cart.push(product);

}

localStorage.setItem("cart", JSON.stringify(cart));

alert(product.name + " added to cart");

});

});

/* CART PAGE */

const cartItems = document.getElementById("cartItems");

const grandTotal = document.getElementById("grandTotal");

if(cartItems){

function renderCart(){

cartItems.innerHTML = "";

let total = 0;

cart.forEach((item,index)=>{

total += item.price * item.quantity;

cartItems.innerHTML += `

<tr>

<td>

<img src="${item.image}" width="80">

</td>

<td>${item.name}</td>

<td>₹${item.price}</td>

<td>

<button class="qty-btn increase"
data-index="${index}">

+

</button>

${item.quantity}

<button class="qty-btn decrease"
data-index="${index}">

-

</button>

</td>

<td>

₹${item.price * item.quantity}

</td>

<td>

<button class="qty-btn remove"
data-index="${index}">

X

</button>

</td>

</tr>

`;

});

grandTotal.innerHTML =
"Grand Total: ₹" + total;

localStorage.setItem("cart", JSON.stringify(cart));

addEvents();

}

function addEvents(){

document.querySelectorAll(".increase")
.forEach(btn=>{

btn.addEventListener("click",()=>{

cart[btn.dataset.index].quantity++;

renderCart();

});

});

document.querySelectorAll(".decrease")
.forEach(btn=>{

btn.addEventListener("click",()=>{

if(cart[btn.dataset.index].quantity > 1){

cart[btn.dataset.index].quantity--;

}

renderCart();

});

});

document.querySelectorAll(".remove")
.forEach(btn=>{

btn.addEventListener("click",()=>{

cart.splice(btn.dataset.index,1);

renderCart();

});

});

}

renderCart();

}