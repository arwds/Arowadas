const productTemplate = document.querySelector("[data-product-template]")
const productContainer = document.querySelector("[data-product-container]")

fetch("/productpages/products.json")
    .then(res => res.json())
    .then(data => {
        data.forEach(product=>{
            const card = productTemplate.content.cloneNode(true).children[0]
            
            const name=card.querySelector("[data-name]")
            const price=card.querySelector("[data-price]")
            const link=card.querySelector("[data-link]")
            const image=card.querySelector("[data-image]")

            name.textContent=product.name
            price.textContent=product.price
            link.setAttribute('href', product.link)
            image.src=product.image

            console.log(card)
            productContainer.append(card)
        })
    })