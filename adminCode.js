$(() => {
    $.ajax({
        url: '/getController.php',
        method: 'GET'
    }).done((res) => {
        res.map((d, i) => {
            $('.result').append(`<tr><th scope="row">${i+1}</th><td>${d.email}</td><td>${d.login_date}</td></tr>`);
        })
    }).fail((err) => {
        console.log(err)
    })
})