const productTemplate = document.querySelector("[data-product-template]")

fetch("/productpages/products.json")
    .then(res => res.json())
    .then(productdata => {
        productdata.forEach(user=>{
            const card = productTemplate.content.cloneNode(true).children(0)
            console.log(user)
        })
    })
