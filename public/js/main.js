


// html elements
let btnDarkMode = document.getElementsByClassName("dark-mode");

let testimonial = document.querySelectorAll(".testimonial")

window.updateScrollerBar = () => {
    let scroller = document.querySelector(".scroller");

    if (!scroller) {
        return;
    }

    let pageHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollTop = document.documentElement.scrollTop;
    scroller.style.width = `${(scrollTop / pageHeight) * 100}%`;
};

// scroll

window.addEventListener("scroll", () => {
    window.updateScrollerBar();
    let scrollTop = document.documentElement.scrollTop;

    let topMenuNav = document.querySelector('[data-id="top-menu"]');

    if (!topMenuNav) {
        return;
    }

    let socialLinks = topMenuNav.querySelector('[data-id="social-links"]');
    let mainLinks = topMenuNav.querySelector('[data-id="main-links"]');
    let logo = topMenuNav.querySelector('[data-id="logo"]');

    let shrink = (element, toShrink = true) => {
        if (!element) {
            return;
        }

        if (toShrink) {
            logo.classList.add('h-8');
            logo.classList.remove('h-16');

            element.classList.add('p-2');
            element.classList.remove('p-4');
            return;
        }

        element.classList.add('p-4');
        element.classList.remove('p-2');

        logo.classList.add('h-16');
        logo.classList.remove('h-8');
    }

    if(scrollTop > 40) {
        shrink(socialLinks, true);
        shrink(mainLinks, true);
        return
    }

    shrink(socialLinks, false);
    shrink(mainLinks, false);
})

// Go to top
window.onscroll = function () {
    let goToTopBtn = document.querySelector("button.up");

    if (!goToTopBtn) {
        return;
    }

    if(window.scrollY >= 600) {
        goToTopBtn.classList.add("time");
        return
    }

    goToTopBtn.classList.remove("time");
}

document.querySelector("button.up")?.addEventListener('click', () => {
    window.scrollTo({
        left:0,
        top: 0,
        behavior: "smooth",
    })
});

function darkMode() {
    let body = document.body;
    body.classList.toggle("dark-theme");

    let theme;

    if(body.classList.contains("dark-theme")) {
        theme = "DARK";
        btnDarkMode[0].classList.replace("bxs-moon", "bx-sun");
    }else {
        theme = "LIGHT";
        btnDarkMode[0].classList.replace("bx-sun", "bxs-moon");
    }
    localStorage.setItem("pageTheme", theme)
}

let getTheme = localStorage.getItem("pageTheme");

if(getTheme == "DARK") {
    document.body.classList = "dark-theme";
    btnDarkMode[0].classList.replace("bxs-moon", "bx-sun");

}

function openVideo(trigger) {
    if (!trigger) {
        return;
    }

    let youtubeUrl = trigger.dataset.youtubeUrl;

    if (!youtubeUrl) {
        console.log('error', {
            youtubeUrl,
        });
        return;
    }

    let videoConatainer = document.querySelector('.video');
    let videoElement = videoConatainer.querySelector('[data-id="demo-video"]');

    if (!videoConatainer || !videoElement) {
        console.log('error #1:', videoElement, videoConatainer);
        return;
    }

    videoElement.setAttribute('src', youtubeUrl);

    videoConatainer.classList.add("videoClicked");
    document.body.style.setProperty("overflow", "hidden");
}

function closeVideo() {
    let videoConatainer = document.querySelector('.video');
    let videoElement = videoConatainer.querySelector('[data-id="demo-video"]');

    if (!videoConatainer || !videoElement) {
        console.log('error #2:', videoElement, videoConatainer);
        return;
    }

    videoElement.removeAttribute('src');

    videoConatainer.classList.remove("videoClicked");
    document.body.style.removeProperty("overflow")
}




// filter

let gallery = document.getElementById("gallery")

let shopItemsData = [{
    img: "imgs/herowarz-4k-wv-1920x1080.jpg",
    name: "HEROWARZ",
    date: "25 Dec, 2025",
    dataName: "darkSouls"
},{
    img: "imgs/godfall-2020-4k-vz-1920x1080.jpg",
    name: "GOD FALL",
    date: "25 Dec, 2022",
    dataName: "darkSouls"
},{
    img: "imgs/far-cry-6-villain-giancarlo-esposito-10k-cv-1920x1080.jpg",
    name: "FAR CRY 6",
    date: "25 Dec, 2021",
    dataName: "spiderMan"
},{
    img: "imgs/fall-guys-ultimate-knockout-2020-4k-ml-1920x1080.jpg",
    name: "FALL GUYS",
    date: "25 Dec, 2019",
    dataName: "anime"
},{
    img: "imgs/erato-final-fantasy-4k-hw-1920x1080.jpg",
    name: "ERATO FINAL FANTASY",
    date: "25 Dec, 2012",
    dataName: "anime"
},{
    img: "imgs/resident-evil-among-us-4k-2h-1920x1080.jpg",
    name: "AMONG US",
    date: "25 Dec, 2020",
    dataName: "darkSouls"
},{
    img: "imgs/the-falconeer-0x-1920x1080.jpg",
    name: "THE FALCONEER",
    date: "25 Dec, 2025",
    dataName: "spiderMan"
},{
    img: "imgs/assassins-creed-valhalla-female-eivor-axe-8k-bn-1920x1080.jpg",
    name: "Assassins Creed Valhalla",
    date: "25 Dec, 2022",
    dataName: "spiderMan"
},{
    img: "imgs/2023-lies-of-p-5k-jp-1920x1080.jpg",
    name: "Lies Of P",
    date: "25 Dec, 2021",
    dataName: "darkSouls"
},{
    img: "imgs/control-x-cyberpunk-2077-5k-ib-1920x1080.jpg",
    name: "Control X Cyberpunk",
    date: "25 Dec, 2019",
    dataName: "darkSouls"
},{
    img: "imgs/flapjack-cannon-fortnite-4k-9l-1920x1080.jpg",
    name: "Flapjack Cannon Fortnite",
    date: "25 Dec, 2012",
    dataName: "spiderMan"
},{
    img: "imgs/fortnite-2018-victory-royale-39-1920x1080.jpg",
    name: "Fortnite",
    date: "25 Dec, 2018",
    dataName: "anime"
},{
    img: "imgs/pubg-spark-the-flame-4k-gj-1920x1080.jpg",
    name: "PUBG",
    date: "25 Dec, 2025",
    dataName: "spiderMan"
},{
    img: "imgs/phoenix-valorant-4k-2020-3t-1920x1080.jpg",
    name: "Valorant",
    date: "25 Dec, 2022",
    dataName: "anime"
},{
    img: "imgs/wallpaperflare.com_wallpaper000.png",
    name: "DARK SOULS 1",
    date: "25 Dec, 2021",
    dataName: "spiderMan"
},{
    img: "imgs/dark-souls-3-cinder-5k-ix-1920x1080.jpg",
    name: "DARK SOULS 3",
    date: "25 Dec, 2019",
    dataName: "anime"
},{
    img: "imgs/wallpaperflare.com_wallpaper (7).jpg",
    name: " DEMON SLAYER",
    date: "25 Dec, 2012",
    dataName: "darkSouls"
},{
    img: "imgs/wallpaperflare.com_wallpaper (19).jpg",
    name: "MONSTER",
    date: "25 Dec, 2018",
    dataName: "anime"
}]

let generategallery  = () => {
    return (gallery.innerHTML = shopItemsData.map((x, index) => {
        let {img, name, date, dataName} = x;

        name = `Post Title #${dataName}`;
        img = 'imgs/blog-01.png';
        date = (new Date()).toLocaleString();
        return `
        <div class="free" data-name="${dataName}">
            <div class="code">
                <img src="${img}" alt="">
                <div class="read">
                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="skill">
                <h3>${name}</h3>
                <div class="your">
                    <p>${date}</p>
                </div>
                <h4>Tips to quickly improve your coding speed.</h4>
            </div>
        </div>`
    }).join(""))
};

generategallery()


const filterIcon = document.querySelectorAll(".items span");
const filterableCards = document.querySelectorAll(".gallery .free");

// console.log(filterIcon, filterableCards)

const filterCards = e => {
    document.querySelector(".how").classList.remove("how");
    e.target.classList.add("how");

    filterableCards.forEach(card => {
        card.classList.add("hide");

        if(card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all") {
            card.classList.remove("hide")
        }
    })
}

filterIcon.forEach(button => button.addEventListener("click", filterCards))

let megaMenu = document.querySelector(".mega-menu");

document.querySelector(".pages")?.addEventListener("click", ev => ev.target.classList.toggle("open"));

let mainNav = document.querySelector(".main-nav");

document.querySelector(".toggles")?.addEventListener("click", ev => ev.target.classList.toggle("toggle-menu"));

function check() {
    const checkbox = document.querySelector(".checkbox")
    const priceOne = document.querySelector(".One")
    const priceTwo = document.querySelector(".Two")
    const pricethere = document.querySelector(".Three")
      if (checkbox.checked == true) {
        priceOne.innerHTML = "<div><h3>$149</h3>/per year</div>"
        priceTwo.innerHTML = "<div><h3>$608</h3>/per year</div>"
        pricethere.innerHTML = "<div><h3>$1568</h3>/per year</div>"
      } else {
        priceOne.innerHTML = "<div><h3>$29</h3>/per month</div>"
        priceTwo.innerHTML = "<div><h3>$59</h3>/per month</div>"
        pricethere.innerHTML = "<div><h3>$139</h3>/per month</div>"
      };}
