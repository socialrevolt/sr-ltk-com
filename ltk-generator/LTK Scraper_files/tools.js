function htmlEncode(value){
    return $('<div/>').text(value).html();
}

function htmlDecode(value){
    return $('<div/>').html(value).text();
}

jQuery(document).ready(function() {
    var affiliates = $('.affiliate-select');
    $('.affiliate-select').change(function() {
        var index = affiliates.index(this);

        $.ajax({
            url: 'index',
            type: "POST",
            data: {'affiliate_id': this.value},
            dataType: "json",
            success: function(response){
                var option_elements = response['results']['advertisers'].map(function(advertiser){
                  // jquery returns this as an array; have to get only first element
                  // so that not trying to append list-of-lists
                  return ($('<option/>').
                    attr('value', advertiser.id).
                    text(advertiser.name + " - " + advertiser.id))[0];
                });
                $('#advertiser-select-'+ index).empty().append(option_elements);
            },

        });
    })
    .change();
});
