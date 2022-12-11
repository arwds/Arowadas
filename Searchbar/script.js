const productTemplate = document.querySelector("[data-product-template]");
const productContainer = document.querySelector("[data-product-container]");

fetch("/productpages/products.json")
    .then(res => res.json())
    .then(data => {
        data.forEach(product=>{
            const card = productTemplate.content.cloneNode(true).children[0];
            
            const name=document.querySelector("[data-name]");
            const price=document.querySelector("[data-price]");
            const link=document.querySelector("[data-productlink]");
            const image=document.querySelector("[data-image]");

            name.textContent=product.name;
            price.textContent=product.price;
            image.src=product.image;
            
            if(link){
                link.href=product.link;
            }
            console.log(card);
            productContainer.append(card);
        });
    });
