import { $ } from "../../../App";

function pontuacao() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let page = urlParams.get('page');
    let totalPaginas = 0;
    if (typeof usuarioId !== 'undefined') {
        obterPontuacaoUsuario(page, usuarioId);
    }
    paginar();

    function obterPontuacaoUsuario(page, idUsuario) {
        $('.spinner').removeClass('d-none');
        $.ajax({
            url: '/api/jogos/linha-amarela/obter-pontos.php',
            method: 'POST',
            type: 'json/application',
            data: { page: page || 1, id_usuario: idUsuario },
            success: (data) => {
                $('.spinner').addClass('d-none');
                const pontuacoes = JSON.parse(data);
                const pontosUsuario = $('#pontuacao');
                pontosUsuario.html('');
                for (let pontuacao of pontuacoes) {
                    pontosUsuario.append(`<tr>
                                    <td>${pontuacao.posicao}</td>
                                    <td>${pontuacao.nome}</td>
                                    <td>${pontuacao.pontuacao}</td>
                                </tr>`);
                }
            },
            error: (error) => {
                $('.spinner').addClass('d-none');
                console.log(error.responseText);
            }
        });
    }
    function paginar(event) {
        if (event) event.preventDefault();
        let timer;
        clearTimeout(timer);
        $('.spinner').removeClass('d-none');
        timer = setTimeout(() => {
            if (event && event.target && event.target.innerText == 'Próximo') {
                if (page < totalPaginas) {
                    page++;
                }
            } else if (event && event.target && event.target.innerText == 'Anterior') {
                if (page > 1) {
                    page--;
                }
            } else {
                page = event && event.target ? event.target.innerText : 1;
            }
            urlParams.set('page', page);
            history.replaceState(null, '', `?${urlParams.toString()}`);


            $.ajax({
                url: '/api/jogos/linha-amarela/obter-pontos.php',
                method: 'POST',
                type: 'json/application',
                data: { page: page || 1 },
                success: (data) => {
                    $('.spinner').addClass('d-none');
                    const pontuacoes = JSON.parse(data);
                    const lista = $('#lista');
                    lista.html('');
                    for (let pontuacao of pontuacoes) {
                        lista.append(`<tr>
                                            <td>${pontuacao.posicao}</td>
                                            <td>${pontuacao.nome}</td>
                                            <td>${pontuacao.pontuacao}</td>
                                        </tr>`);
                    }
                },
                error: (error) => {
                    $('.spinner').addClass('d-none');
                    console.log(error.responseText);
                }
            });
            $.ajax({
                url: '/api/jogos/linha-amarela/obter-paginacao.php',
                method: 'POST',
                type: 'json/application',
                data: { page: page },
                success: (response) => {
                    const dados = JSON.parse(response);
                    const paginas = $('#pagination');
                    paginas.html(dados.paginacao);
                    totalPaginas = dados.paginas;
                    $('.page-link').unbind('click').on('click', paginar);
                },
                error: (error) => {
                    console.log(error.responseText);
                }
            });
        }, 200);
    }
}
async function obterRanking(idUsuario) {
    $('.spinner').removeClass('d-none');
    $.ajax({
        url: '/api/jogos/linha-amarela/obter-ranking.php',
        method: 'POST',
        type: 'json/application',
        data: {
            id_usuario: idUsuario
        },
        success: (data) => {
            $('.spinner').addClass('d-none');
            const pontuacoes = data;
            const ranking = $('#ranking');
            ranking.html(pontuacoes);
        },
        error: (error) => {
            $('.spinner').addClass('d-none');
            console.log(error.responseText);
        }
    });
}
export { pontuacao, obterRanking };