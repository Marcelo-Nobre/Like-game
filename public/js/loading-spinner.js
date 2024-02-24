window._helpers = window._helpers || {};

window._helpers.sleep = function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

window.showLoadingSpinner = async (show = true) => {
    let spinner = document.querySelector('[data-id="loading-spinner"]');

    if (!spinner) {
        return;
    }

    let afterDone = (show) => {
        if (show) {
            spinner?.classList?.remove('hide-spinner');
            return;
        }

        spinner?.classList?.add('hide-spinner');
    };

    await (async (show = true, afterDone) => {
        var elemento = document.querySelector('[data-id="loading-spinner"]');
        var opacidade = elemento.style.opacity === '' ? 1 : Number(elemento.style.opacity); // Inicia com opacidade total (show = true) ou zero (show = false)
        var intervalo =  20; // Intervalo de tempo em milissegundos

        var intervalId = setInterval(function() {
            opacidade = (opacidade - 0.1);
            opacidade = opacidade >= 0 && opacidade <= 1 ? opacidade : 0;
            elemento.style.opacity = opacidade;

            if (opacidade <=  0) {
                clearInterval(intervalId);
                afterDone && afterDone(show);
            }
        }, intervalo);
    })(show, afterDone);
};

document.addEventListener('DOMContentLoaded', async (event) => {
    window._helpers.sleep(200).then(async () => {
        await showLoadingSpinner(false);
    });
});
