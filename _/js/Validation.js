$(document).ready(function()
{
//------------------------Validation New EditEgCheck --(^-^)-------------------9/2/2016----

    $(".EditEgCheck").click(function ()
    {
        var paperPick1 = $("#edit_required_paper1").is(':checked');
        var paperPick2 = $("#edit_required_paper2").is(':checked');
        var paperPick3 = $("#edit_required_paper3").is(':checked');
        var paperPick4 = $("#edit_required_paper4").is(':checked');
        var paperPick5 = $("#edit_required_paper5").is(':checked');

        var Check5 = $(this);

        if (Check5.is(':checked'))
        {
            if (paperPick1 == true && paperPick2 == true && paperPick3 == true && paperPick4 == true && paperPick5 == true)
            {
                $("#ConfirmationEgEdit").collapse("show");
            }
            else
            {
                $("#ConfirmationEgEdit").collapse("hide");
            }
        }
        else
        {
            $("#ConfirmationEgEdit").collapse("hide");
        }
    }); // End Of EditEgCheck

//------------------------Validation New EditFrCheck --(^_^)-------------------9/2/2016----

    $(".EgCheck").click(function ()
    {
        var paperPick1 = $("#PaperEgCheck1").is(':checked');
        var paperPick2 = $("#PaperEgCheck2").is(':checked');
        var paperPick3 = $("#PaperEgCheck3").is(':checked');
        var paperPick4 = $("#PaperEgCheck4").is(':checked');
        var paperPick5 = $("#PaperEgCheck5").is(':checked');

        var Check5 = $(this);

        if (Check5.is(':checked'))
        {
            if (paperPick1 == true && paperPick2 == true && paperPick3 == true && paperPick4 == true && paperPick5 == true)
            {
                $("#ConfirmationEg").collapse("show");
            }
            else
            {
                $("#ConfirmationEg").collapse("hide");
            }
        }
        else
        {
            $("#ConfirmationEg").collapse("hide");
        }
    }); // End Of EditEgCheck

});// End Of Ready