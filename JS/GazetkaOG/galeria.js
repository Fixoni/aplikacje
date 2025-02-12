const timeNow = () => {
    let date = new Date()
    let month = date.getMonth() + 1
    let day = date.getDate()
    let hour = date.getHours()
    let minute = date.getMinutes()
    let second = date.getSeconds()
    const monthsOfYear = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"]
    let monthName = monthsOfYear[month - 1]
    document.querySelector("#timeNow").innerHTML = `${day} ${monthName} ${hour}:${minute}:${second}`
}

function change1() {
    document.querySelector("#pageName").innerHTML = "Codzienne informacje ze Świata"
}

function change2() {
    document.querySelector("#pageName").innerHTML = "GazetkaOG"
}

let logos = ["Logo.png", "Logo2.png", "Logo3.png"]
let currentLogoIndex = 0
const changeLogo = () => {
    currentLogoIndex = (currentLogoIndex + 1) % logos.length
    document.querySelector("#headerLogo").src = logos[currentLogoIndex]
}

setInterval(changeLogo, 5000)
setInterval(timeNow, 1000)
timeNow()

const modal = document.getElementById('modal')
const modalImage = document.getElementById('modalImage')
const closeBtn = document.querySelector('.close')
const galleryImages = document.querySelectorAll('.gallery-image')

galleryImages.forEach(image => {
    image.addEventListener('click', () => {
        modal.style.display = 'flex'
        modalImage.src = image.src
    })
})

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none'
})

modal.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none'
    }
})