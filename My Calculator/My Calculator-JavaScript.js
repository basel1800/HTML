function calc(ope) {

    if (ope === 'a')
        window.lblR.innerHTML =
            eval(window.txtNum1.value) +
            eval(window.txtNum2.value);

    if (ope === 's')
        window.lblR.innerHTML =
            eval(window.txtNum1.value) -
            eval(window.txtNum2.value);

    if (ope === 'm')
        window.lblR.innerHTML =
            eval(window.txtNum1.value) *
            eval(window.txtNum2.value);

    if (ope === 'd')
        window.lblR.innerHTML =
            eval(window.txtNum1.value) /
            eval(window.txtNum2.value);

    if (ope === 'mod')
        window.lblR.innerHTML =
            eval(window.txtNum1.value) %
            eval(window.txtNum2.value);
}