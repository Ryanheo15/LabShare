$(document).ready(function(){
    // Sonstructs the suggestion engine
    var countries = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // The url points to a json file that contains an array of country names
        prefetch: '../data/countries.json'
    });

    // Initializing the typeahead with remote dataset
    $('.typeahead').typeahead(null, {
        name: 'countries',
        source: countries,
        limit: 5 /* Specify maximum number of suggestions to be displayed */
    });
});
