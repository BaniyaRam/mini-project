const cancel = async (id) => {
    const response = await fetch(`http://localhost/mini-project/editbooking.php?booking_id=${id}`)
    const data = await response.text()
    if(data === "done"){
        window.location.reload()
    }
}