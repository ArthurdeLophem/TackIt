document.querySelectorAll(".bi-star-fill").forEach((e) => {
    e.addEventListener('click', (e) => {
        e.preventDefault();
        let vote = document.querySelector('#voteAmount');
        let voteAmount = parseInt(vote.innerHTML);
        let errorBox = document.querySelector("#voteError");
        let errorMessage = document.querySelector("#errorMessage");
        let error = false;

        let userId = e.target.dataset.userId;
        let voterId = e.target.dataset.voterId;
        console.log(userId, voterId);

        let data = new FormData();
        data.append("userId", userId);
        data.append("voterId", voterId);



        if (userId == voterId) {
            errorBox.style.display = 'flex';
            errorMessage.innerHTML = "je kan niet voor je eigen creatie voten";
            error = true;
        }

        if (voteAmount == 3) {
            errorBox.style.display = 'flex';
            errorMessage.innerHTML = "je hebt al 3 keer gevote";
            error = true;
        }

        if (e.target.getAttribute('fill') == "currentColor" && !error) {
            e.target.setAttribute('fill', '#52B69A')
            vote.innerHTML = voteAmount += 1;
        }
        else if (e.target.getAttribute('fill') == "#52B69A") {
            e.target.setAttribute('fill', 'currentColor')
            vote.innerHTML = voteAmount -= 1;
            error = false;
        }

        if (!error) {
            document.querySelector("#voteError").style.display = 'none';
            fetch('ajax/saveVotes.php', {
                method: 'POST', // or 'PUT'
                body: data,
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    })
})