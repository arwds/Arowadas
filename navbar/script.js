const Navbar = () => {
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="navdiv">
            <a href="/index.html"><img src="/fulllogo.png" class="logo" alt="Navbar Logo"></a>
            <div class="navthings">
                <div class="search">
                    <input type="text" class="searchbar" placeholder="Search items" data-search>
                    <button class="searchbutton"><b>Search</b></button>
                </div>
            </div>
    </div>
    <ul class="linklist">
        <li class="link"><a href="/index.html">Home</a></li>
        <li class="link"><a href="/news">ANEWS</a></li>
    </ul>
    `;
}

Navbar();