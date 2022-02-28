$(document).ready(function () {
    $("#comment-form").submit(function (e) {
        e.preventDefault();
        console.log(this);
        const id = $(".main #articleId").text();
        const subject = $("#subject", this).val();
        const body = $("#body", this).val();
        const data = {"subject": subject, "body": body};

        $('#subject-error').slideUp();
        $('#body-error').slideUp();
        axios.post('/api/addComment/' + id, data)
            .then((response) => {
                $(this).trigger('reset');
                $('#submit-btn').prop('disabled', true);
                $('#comment-alert').slideDown();
                $('#comment-alert p').html(response.data.message);
                setTimeout(function () {
                    $('#comment-alert').slideUp();
                }, 5000);
            })
            .catch((error) => {
                if (error.response.status !== 422) {
                    console.log(error);
                    return;
                }
                const validationErrors = error.response.data.errors;
                Object.keys(validationErrors).map(key => {
                    const msg = validationErrors[key][0];
                    const selector = "#" + key + "-error";
                    console.log(selector, key, msg);
                    $(selector).slideDown().text(msg);
                });

            });
    });
});
