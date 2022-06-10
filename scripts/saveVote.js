document.querySelector('.bi-star-fill').addEventListener('click', (e) => {
    e.preventDefault();
    let userId = e.target.dataset.userId;
    let voterId = e.target.dataset.voterId;
    let data = new FormData();
    data.append("userId", userId);
    data.append("voterId", voterId);

    fetch('ajax/saveVotes.php', {
        method: 'POST', // or 'PUT'
        body: data,
    })
        .then(response => response.json())
        .then(data => {
            if (e.target.getAttribute('fill') == "currentColor") {
                e.target.setAttribute('fill', '#52B69A')
            }
            else {
                e.target.setAttribute('fill', 'currentColor')
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
})