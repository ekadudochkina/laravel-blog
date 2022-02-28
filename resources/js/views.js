$(document).ready(function () {
    setTimeout(increaseViews, 5000);
});

function increaseViews() {
    let id = $(".main #articleId").text();
    axios.post('/api/increaseViews/' + id, {})
        .then((response) => {
            $(".main .article-counters .views .number").text(response.data.count);
        }, (error) => {
            console.log(error);
        });
}
