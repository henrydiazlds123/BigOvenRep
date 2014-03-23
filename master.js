/**
 *  DO SOME JQUERY TO PULL FROM THE SERVER AND POPULATE THE DIV 
 *  TAG!!!
 */
function showIngredients() {
	alert("Attempting to populate...");
    $(document).ready(function () {
        // prepare the data
        var source =
        {
            datatype: "json",
            datafields: [
                { name: 'ing_id' },
                { name: 'ing_name' },
                { name: 'ing_BOID' },
            ],
            url: 'data.php'
        };
        var dataAdapter = new $.jqx.dataAdapter(source);
        $("#dropdownlist").jqxDropDownList(
        {
            source: dataAdapter,
            theme: 'classic',
            width: 200,
            height: 25,
            selectedIndex: 0,
            displayMember: 'ing_name',
            valueMember: 'ing_BOID'
        });
    });
}