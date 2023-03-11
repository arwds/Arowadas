import productinfo from "/productpages/products.json" assert {type: "json"};

document.getElementById("container").innerHTML = `
    ${productinfo.map(function(item){
        return`
        <a href="${item.link}" class="productlink" data-link>
            <div class="itemgrid">
                <div class="product" style="cursor: pointer;">
                    <center><img src = "${item.image}" class="productimg" /></center>
                    <center><p class="productname">${item.name}</p></center>
                    <center><p class="pricetag">${item.price}</p></center>
                </div>
            </div>
        </a>
        `
    }).join("")}
`;