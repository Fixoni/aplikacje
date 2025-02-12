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

const handleSubmit = event => {
    event.preventDefault()
    alert("Opinia została dodana")
    event.target.reset()
}

setInterval(changeLogo, 5000)
setInterval(timeNow, 1000)
timeNow()

document.querySelector("#opinionForm").addEventListener("submit", handleSubmit)

const stars = document.querySelectorAll('.star')
const ratingResult = document.getElementById('ratingResult')

let currentRating = 0

stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        currentRating = index + 1
        updateStars(currentRating)
        ratingResult.textContent = `Dziękujemy za ocenę: ${currentRating}/5!`
    })

    star.addEventListener('mouseover', () => {
        updateStars(index + 1)
    })

    star.addEventListener('mouseout', () => {
        updateStars(currentRating)
    })
})

function updateStars(rating) {
    stars.forEach((star, index) => {
        star.style.color = index < rating ? '#0e4901' : '#b9b59f'
    })
}