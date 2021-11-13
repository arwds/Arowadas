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
        <li class="link"><a href="/">Home</a></li>
        <li class="link"><a href="/compo">Compo</a></li>
        <li class="link"><a href="/membercard">Member Card</a></li>
        <li class="link"><a href="/mathcompo">Math Compo</a></li>
    </ul>
    `;
}

Navbar();