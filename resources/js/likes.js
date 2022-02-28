$(document).ready(function () {

    $('.main .article .likes').on('click', function (event) {
        const id = $(this).parents(".article").children("#articleId").text();
        const element = $(this);

        axios.post('/api/increaseLike/' + id, {})
            .then((response) => {
                element.children(".number").text(response.data.count);
            }, (error) => {
                let message = "Непредвиденная ошибка";
                if (error.response.status === 400) {
                    message = error.response.data.error;
                }
                const errorElement = element.children(".like-error");
                errorElement.text(message);
                //убираем ошибку через несколько секунд
                setTimeout(function () {
                    errorElement.text("");
                }, 5000);
            });
    });
});
