const productTemplate = document.querySelector("[data-product-template]");
const productContainer = document.querySelector("[data-product-container]");

fetch("/productpages/products.json")
    .then(res => res.json())
    .then(data => {
        data.forEach(product=>{
            const card = productTemplate.content.cloneNode(true).children[0];
            
            const name=card.querySelector("[data-name]");
            const price=card.querySelector("[data-price]");
            const linkdocument=document.querySelector("[data-productlink]");
            const image=card.querySelector("[data-image]");

            name.textContent=product.name;
            price.textContent=product.price;
            image.src=product.image;
            
            linkdocument.onclick = function(){
                window.open(product.link);
            }
            
            console.log(card);
            productContainer.append(card);
        });
    });
