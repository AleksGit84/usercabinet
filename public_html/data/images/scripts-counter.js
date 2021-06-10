function textCounter(field, countfield, maxlimit) {
    // var submitButton = document.getElementById('btn-submit');
    // submitButton.disabled = !field.value.length;

    if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
    else
        countfield.value = maxlimit - field.value.length;
}