const url = 'http://localhost/Wordpress/Esercizi/Esercizio-giorno46-API/wp/wp-json/wp/v2/';
console.dir(document.location)
if (decodeURIComponent(document.location.pathname) === '/Wordpress/Esercizio giorno 46 - API WP/posts.html') {
    Promise.all([
        fetch(url + 'posts').then(response => response.json()),
        fetch(url + 'users').then(response => response.json())
    ])
    .then(([posts, users]) => {
        createPost(posts, users);
    });
}

function createPost(posts, users) {
    let body = document.querySelector('.card-body');
    
    let tableHtml = document.createElement('table');
    tableHtml.className = 'table table-hover table-forum text-center';
    
    posts.forEach(post => {
        let author = users.find(user => user.id === post.author);
        let authorName = author ? author.name : 'Unknown'; 
        let authorImg = author.avatar_urls["24"];

        tableHtml.innerHTML += `
            <tr>
                <td scope="row" class="text-nowrap">
                    <a href="#" type="button" class="btn btn-outline-dark-green btn-sm p-1 m-0 waves-effect">
                        <span class="value">0</span>
                        <i class="fas fa-thumbs-up ml-1"></i>
                    </a>
                    <a href="#" button" class="btn btn-outline-danger btn-sm p-1 m-0 waves-effect">
                        <span class="value">0</span>
                        <i class="fas fa-thumbs-down ml-1"></i>
                    </a>
                </td>
                <td class="text-start">
                    <a href="article.html" class="font-weight-bold blue-text article">
                        ${post.title.rendered}
                    </a>
                    <div class="my-2">
                        <a href="#" class="blue-text author">
                            <strong><img src="${authorImg}"/>  ${authorName}</strong>
                        </a>
                        <span class="badge bg-secondary mx-1">staff</span>
                        <span class="badge bg-primary mx-1">pro</span>
                        <span class="badge bg-warning mx-1">premium</span>
                        <span>${post.date}</span>
                        <div></div>
                    </div>
                </td>
                <td>
                    <a href="#" class="text-dark">
                        <span>0</span>
                        <i class="fas fa-comments ml-1"></i>
                    </a>
                </td>
            </tr>
        `;
    });
    body.appendChild(tableHtml);
}

      