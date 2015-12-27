/**
 * Created by tim on 27.12.2015.
 */
$(document).ready(function(){
    $("#wert").text("No Data");

    $("#wert").load("/data/texts/ajax_wert.txt");
});