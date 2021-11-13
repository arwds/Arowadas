const Navbar = () => {
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="navdiv">
            <a href="/Arowadas/index.html"><img src="/Arowadas/fulllogo.png" class="logo" alt="Navbar Logo"></a>
            <div class="navthings">
                <div class="search">
                    <input type="text" class="searchbar" placeholder="Search items">
                    <button class="searchbutton"><b>Search</b></button>
                </div>
            </div>
    </div>
    <ul class="linklist">
        <li class="link"><a href="/Arowadas/index.html">Home</a></li>
        <li class="link"><a href="/Arowadas/compo/index.html">Compo</a></li>
        <li class="link"><a href="/Arowadas/membercard/index.html">Member Card</a></li>
    </ul>
    `;
}

Navbar();