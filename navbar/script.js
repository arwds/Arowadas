const Navbar = () => {
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="navdiv">
            <a href="/index.html"><img src="/fulllogo.png" class="logo" alt="Navbar Logo"></a>
            <div class="navthings">
                <div class="search">
                    <input type="text" class="searchbar" placeholder="Search items">
                    <button class="searchbutton"><b>Search</b></button>
                </div>
            </div>
    </div>
    <ul class="linklist">
        <li class="link"><a href="/index.html">Home</a></li>
        <li class="link"><a href="/membercard">Member Card</a></li>
        <li class="link"><a href="/mathcompo">Math Compo</a></li>
        <li class="link"><a href="/mustacheman">Mustache Man</a></li>
        <li class="link"><a href="/song">Song Group</a></li>
        <li class="link"><a href="/news">ANEWS</a></li>
        <li class="link"><a href="#">Games</a>
            <ul>
                <li class="link"><a href="/games/cheaseballwakeup">Cheaseball Wakeup</a></li>
                <li class="link"><a href="/games/thegreatescape">The Great Escape</a></li>
                <li class="link"><a href="#">Cheaseball Wakeup 2</a></li>
                <li class="link"><a href="/games/dimondblobvoid">Dimond Blob, Void</a></li>
            </ul>
        </li>
    </ul>
    <script src="/navbar/searchbar.js"></script>
    `;
}

Navbar();