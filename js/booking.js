const check_btn = document.querySelectorAll('.btbox')
const book_btn = document.querySelector('#book_btn')
for (btn of check_btn) {
    btn.addEventListener("change", (e) => {
        if (e.target.checked) {
            book_btn.removeAttribute('disabled')
        } else {
            book_btn.setAttribute('disabled', '')
        }
    })
}


const seeTime = async (e) => {
    const time = e.value
    const response = await fetch(`http://localhost/mini-project/check.php?date=${time}`)
    const data = await response.text()
    const str = (data.split(',')).slice(0, -1)
    const btnLabel = document.querySelectorAll('.btbox')
    for (btn of btnLabel) {
        if (str.includes(btn.value)) {
            const label = btn.nextSibling.nextSibling
            label.classList.add('strike')
            btn.setAttribute('disabled', '')
        } else {
            btn.removeAttribute('disabled')
            const label = btn.nextSibling.nextSibling
            label.classList.remove('strike')
        }
    }
}



