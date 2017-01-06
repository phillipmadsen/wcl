$(document).ready(function() {
    $('.summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
 
    /* Bootstrap TagsInput */
    if ($('input[name="tags"]').length > 0) {
        var tags = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '/admin/tags.json',
                filter: function(list) {
                    return $.map(list, function(tag) {
                        return { name: tag }; });
                }
            }
        });
        tags.initialize();

        $('input[name="tags"]').tagsinput({
            typeaheadjs: {
                name: 'tags',
                displayKey: 'name',
                valueKey: 'name',
                source: tags.ttAdapter()
            }
        });
    }
    /* /Bootstrap TagsInput */
});
