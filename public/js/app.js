let icons = document.querySelectorAll('i.favourite-icon');
for (i in icons) {
    icons[i].onmouseover = createIconSwapFun(icons[i], 'bi-star-fill', 'bi-star');
    icons[i].onmouseout = createIconSwapFun(icons[i], 'bi-star', 'bi-star-fill');
    /*
    icons[i].onclick = function() {
        if (this.classList.contains('is-favourited')) {
            this.classList.remove('is-favourited');
        }
        else {
            this.classList.add('is-favourited');
        }

        fetchFavourite(this.nextElementSibling.textContent);
    };
    */
}

function createIconSwapFun(icon, addedClass, removedClass) {
    return function() {
        if (!icon.classList.contains('is-favourited')) {
            icon.classList.add(addedClass);
            icon.classList.remove(removedClass);
        }
    }
}

/*
async function fetchFavourite(changedId) {
    console.log(fetch_config.route);
    const response = await fetch(fetch_config.route.replace('/0', '/' + changedId), {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({id: changedId})
    });
    const content = await response.json();
    for (const entry in JSON.parse(content)) {
        console.log(entry);
    }
}
*/
