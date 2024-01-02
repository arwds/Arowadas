const Navbar = () => {
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="navdiv">
            <a href="/index.html"><img src="/fulllogo.png" class="logo" alt="Navbar Logo"></a>
    </div>
    <ul class="linklist">
        <li class="link"><a href="/index.html">Home</a></li>
    </ul>
    `;
}

Navbar();