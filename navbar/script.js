const Navbar = () => {
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="navdiv">
            <a href="/index.html"><img src="/fulllogo.png" class="logo" alt="Navbar Logo"></a>
    </div>
    <ul class="linklist">
        <li class="link"><a href="/index.html">Home</a></li>
        <li class="link"><a href="/membercard">Member Card</a></li>
        <li class="link"><a href="/mathcompo">Math Compo</a></li>
        <li class="link"><a href="/news">ANEWS</a></li>
    </ul>
    <script src="/navbar/searchbar.js"></script>
    `;
}

Navbar();