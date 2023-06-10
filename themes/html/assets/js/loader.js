const loader = document.getElementById("loader")

if (loader) {
    setTimeout(() => {
        loader.style.display = 'none'
    }, 3000)

    setTimeout(() => {
        loader.style.opacity = '0'
        loader.style.transition = 'opacity 1s'
    }, 2000)
}