const productTemplate = document.querySelector("[data-product-template]");
const productContainer = document.querySelector("[data-product-container]");
const Search = document.querySelector("[data-search]");

let products = [];

Search.addEventListener("input", inp => {
    const value = inp.target.value;
    products.forEach(product => {
        const Visibility = product.name.includes(value)
        product.element.classList.toggle("visible", Visibility)
    }); 
});

fetch("/productpages/products.json")
    .then(res => res.json())
    .then(data => {
        products = data.map(product=>{
            const card = productTemplate.content.cloneNode(true).children[0];
            
            const name=card.querySelector("[data-name]");
            const price=card.querySelector("[data-price]");
            const linkdocument=document.querySelector(".productlink");
            const image=card.querySelector("[data-image]");
            name.textContent=product.name;
            price.textContent=product.price;
            image.src=product.image;

            productContainer.append(card);
            return {name: product.name, element: card};
        });
    });