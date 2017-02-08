var Fcalc = document.calc,
    Currents = undefined,
    FlagNewNum = false,
    PendingOp = undefined;

$(document).ready(function () {
    $('.NumPressed').on('click', function () {
        if (FlagNewNum)
        {
            Fcalc.ReadOut.value = $(this).text();
            FlagNewNum = false;
        }
        else
        {
            if (Fcalc.ReadOut.value == "0")
                Fcalc.ReadOut.value = $(this).text();
            else
                Fcalc.ReadOut.value += $(this).text();
        }
    });

    $('.operator').on('click', function () {
        var Readout = Fcalc.ReadOut.value;
        if (FlagNewNum && PendingOp != "=")
        {
            Fcalc.ReadOut.value = Currents;
        }
        else
        {
            FlagNewNum = true;
            if ( '+' == PendingOp )
                Currents += parseFloat(Readout);
            else if ( '-' == PendingOp )
                Currents -= parseFloat(Readout);
            else if ( '/' == PendingOp )
                Currents /= parseFloat(Readout);
            else if ( '*' == PendingOp )
                Currents *= parseFloat(Readout);
            else
                Currents = parseFloat(Readout);
            Fcalc.ReadOut.value = Currents;
            PendingOp = $(this).text();
        }
    });

    $('.dot').on('click', function () {
        var curReadOut = Fcalc.ReadOut.value;
        if (FlagNewNum)
        {
            curReadOut = "0.";
            FlagNewNum = false;
        }
        else
        {
            if (curReadOut.indexOf(".") == -1)
                curReadOut += ".";
        }
        Fcalc.ReadOut.value = curReadOut;
    });
    $('.clear').on('click', function () {
        Fcalc.ReadOut.value = "0";
        FlagNewNum = true;
        Currents = 0;
        PendingOp = undefined;
    });
});
