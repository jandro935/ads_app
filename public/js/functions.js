$(document).ready(function() {

    // Profile
    $(".btn-pref .btn").click(function () {

        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below
        $(this).removeClass("btn-default").addClass("btn-primary");
    });


    function VoteForm(form, button, buttonRevert) {

        var ticket = button.closest('.ad');
        var id = ticket.data('id');
        var action = form.attr('action').replace(':id', id);
        // var voteCount = ticket.find('.votes-count');

        buttonRevert = ticket.find(buttonRevert);

        button.addClass('hidden');

        // this.getVotes = function () {
        //     return parseInt(voteCount.text().split(' ')[0]);
        // };
        //
        // this.updateCount = function (votes) {
        //     voteCount.text(votes == 1 ? '1 voto' : votes + ' votos');
        // };

        this.submit = function (success) {
            $.post(action, form.serialize(), function (response) {
                buttonRevert.removeClass('hidden');
                success(response);
            }).fail(function () {
                button.removeClass('hidden');
                console.log('Ocurrió un error :(');
            });
        };
    }

    $('.btn-star').click(function (e) {
        e.preventDefault();

        var voteForm = new VoteForm($('#form-star'), $(this), '.btn-unvote');

        voteForm.submit(function (response) {
            if (response.success) {
                console.log('¡Gracias por tu voto!');
                // voteForm.updateCount(voteForm.getVotes() + 1);
            }
        });
    });
});

