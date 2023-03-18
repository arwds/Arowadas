import productinfo from "/productpages/products.json" assert {type: "json"};
const SearchBar = document.querySelector("[data-search]")

let prodcutnames = []


//fetch("/productpages/products.json")
//.then(resp => resp.json())
//.then(data => console.log(data))

for (var i in productinfo.jsonData){
    console.log(Object.values(i));
}

SearchBar.addEventListener("input", inp =>{
    const value = inp.target.value;

});

document.getElementById("container").innerHTML = `
    ${productinfo.map(function(item){
        return`
            <div class="itemgrid">
                <a href="${item.link}" class="productlink" data-link>
                    <div class="product" style="cursor: pointer;">
                        <center><img src = "${item.image}" class="productimg" /></center>
                        <center><p class="productname">${item.name}</p></center>
                        <center><p class="pricetag">${item.price}</p></center>
                    </div>
                </a>
            </div>
        `
    }).join("")}
`;