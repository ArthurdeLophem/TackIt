document.querySelector('.bi-star').addEventListener('click', (e) => {
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
            console.log(data);
            //data.Items.forEach(drawItems);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
})