$ = jQuery;

// multiselect option
$('.jquery_selector').dropdown({
    // read only
    readOnly: false,
    // min count
    minCount: 0,
    // error message
    minCountErrorMessage: '',
    // the maximum number of options allowed to be selected
    limitCount: Infinity,
    // error message
    limitCountErrorMessage: '',
    // search field
    input: '<input type="text" maxLength="20" placeholder="Search">',
    // dynamic data here
    data: [],
    // is search able?
    searchable: true,
    // when there's no result
    searchNoData: '<li style="color:#ddd">No Results</li>',
    // callback
    choice: function () { },
    // custom props
    extendProps: []
});
