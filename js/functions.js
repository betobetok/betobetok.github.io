function traslate() {
    var language;
    if (this.event.target.id) {
        language = this.event.target.id;
    } else if (this.event.target.parentElement.id) {
        language = this.event.target.parentElement.id;
    } else {
        language = this.event.target.parentElement.parentElement.firstElementChild.id;
    }
    cv(language);
}

function ver(ID) {
    document.getElementById(ID).style.display = "none";
    document.getElementById(ID + 1).style.display = "block";

}

function ocultar(ID) {
    document.getElementById(ID).style.display = "block";
    document.getElementById(ID + 1).style.display = "none";

}

function rightCol(lang) {
    return $.ajax({
        type: "POST",
        url: "work.php",
        data: "language=" + lang,
    });
}

function leftCol(lang) {
    return $.ajax({
        type: "POST",
        url: "generals.php",
        data: "language=" + lang,
    });
}

function cv(len) {
    $('.visible').removeClass('visible');
    var left = leftCol(len);
    var right = rightCol(len);
    right.done(
        function(data) {
            $('#work').html('');
            $('#education').html('');
            $('#capacitation').html('');
            $('#work').append($(data)[0]);
            $('#work').append($(data)[2]);
            $('#education').append($(data)[4]);
            $('#education').append($(data)[6]);
            $('#capacitation').append($(data)[8]);
            $('#capacitation').append($(data)[10]);
        }
    ).then(() => {
        left.done(function(data) {
            $('#col-l').html(data);
        });
    }).then(() => {
        $('#generals').parent().addClass('visible');
        $('#work').addClass('visible');
        $('.target').on('click', function(e) {
            if (this.parentElement.id === 'col-l') {
                $('#col-l').find('.visible').removeClass('visible');
            } else {
                $('#col-r').find('.visible').removeClass('visible');
            }
            $(this).addClass('visible');
        });
        $('#capacitation-1').find('h3').on('click', function(e) {
            e.stopPropagation();
            $('.visibleA').removeClass('visibleA');
            $(this).addClass('visibleA');
        });
        $('#capacitation-1').find('h4').on('click', function(e) {
            e.stopPropagation();
            $('.visibleB').removeClass('visibleB');
            $(this).addClass('visibleB');
        });
    });
}
$(function($) {
    cv('english');
});