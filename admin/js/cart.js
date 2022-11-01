const observe = async (id) => {
    const response = await fetch(`http://localhost/mini-project/admin/booking.php?cancel=${id}`)
    const data = await response.text()
}