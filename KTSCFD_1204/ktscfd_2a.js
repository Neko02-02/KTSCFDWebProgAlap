$(document).ready(function ()
{
    $("#load_data").click(function ()
    {
        $("#area").html("");

        $("#area").append("<h2>TOKAJ HEGYALJA EGYETEM</h2>");

        $.getJSON("EINL3W_orarend.json", function (data)
        {
            $("#area").append("<br><b>THE, PTI Órarend 2025 ősz</b><br><br>");

            for (let i = 0; i < data.orarend.ora.length; i++)
            {
                let ora = data.orarend.ora[i];

                $("#area").append("<b>Tárgy:</b>&nbsp;" + ora.targy + "<br><br>");

                $("#area").append(
                    "<b>Időpont:</b><br>&nbsp;Nap:&nbsp;" + ora.idopont.nap +
                    "<br>&nbsp;Tól:&nbsp;" + ora.idopont.tol +
                    "<br>&nbsp;Ig:&nbsp;" + ora.idopont.ig + "<br><br>"
                );

                $("#area").append("<b>Helyszín:</b>&nbsp;" + ora.helyszin + "<br><br>");
                $("#area").append("<b>Oktató:</b>&nbsp;" + ora.oktato + "<br><br>");
                $("#area").append("<b>Szak:</b>&nbsp;" + ora.szak + "<br><br>");


                $("#area").append("<hr>");
            }
        });
    });
});