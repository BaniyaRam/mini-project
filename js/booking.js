const check_btn = document.querySelectorAll('.btbox')
const book_btn = document.querySelector('#book_btn')
for (btn of check_btn) {
    btn.addEventListener("change", (e) => {
        console.log('hello')
        if (e.target.checked) {
            book_btn.removeAttribute('disabled')
        } else {
            book_btn.setAttribute('disabled', '')
        }
    })
}

const today = new Date()
const todayTime = today.getHours({ hour12: false })

const btLabel = document.querySelectorAll('.btlabel')
for (b of btLabel) {
    const text = b.textContent
    const time = text.split(':')[0]
    const diff = todayTime - time
    if (diff > -1) {
        b.style.display = 'none';
    }
}
const seeTime = async (e) => {
    const date = e.value
    const newDate = new Date(date)
    const daydiff = newDate.getTime() - today.getTime()
    if(daydiff > 0){
        for(b of btLabel){
            b.style.display = 'block';
        }
    }
    const response = await fetch(`http://localhost/mini-project/check.php?date=${date}`)
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