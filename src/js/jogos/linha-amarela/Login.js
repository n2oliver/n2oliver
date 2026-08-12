import { toast } from "react-toastify";
import { $ } from "../../../App";

class Login {
    patterns = {
        email: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/,
        nomedeusuario: /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/,
        senha: /.*\S.*/
    }

    appUrl = '/jogos/linha-amarela';
    camadaNome = $('#camada-nome');
    camadaEmail = $('#camada-email');

    campoNome = $('#nome');
    campoEmail = $('#email');
    campoSenha = $('#senha');
    camadaSenha = $('#camada-senha');
    codigoEmail = $('#codigo-email');
    codigoEnviado = $('#codigo-enviado');
    naoRecebiEmail = $('#nao-recebi');
    cancelarEsqueciSenhaEmail = $('#cancelar');
    verificar = $('#verificar');
    btnCadastrar = $('#cadastrar');
    cadastrarSenha = $('#cadastrar-senha');
    cadastroSenha = $('#cadastro-senha');

    login = async () => {
        this.removeNotifications();
        this.showSpinner();

        const email = this.campoEmail.val();

        this.campoSenha.attr('type', 'text');
        const senha = this.campoSenha.val();
        this.campoSenha.attr('type', 'password');

        try {
            const response = await $.ajax({
                url: `/api${this.appUrl}/login.php`,
                data: { email, senha },
                type: 'POST'
            });

            this.showSpinner('hide');

            toast(JSON.parse(response).data, {
                duration: 10000,
                close: true
            });

            return true;

        } catch (xhr) {
            this.showSpinner('hide');

            toast(JSON.parse(xhr.responseText).error, {
                duration: 10000,
                className: 'error',
                close: true
            });

            return false;
        }
    };

    naoTenhoConta = () => {
        this.removeNotifications();
        this.showSpinner();
        const email = this.campoEmail.val();
        this.codigoEnviado.val('');

        if (!email.trim()) {
            this.showSpinner('hide');
            toast("Preencha primeiro o campo email!", {
                duration: 10000,
                className: 'error',
                close: true
            });
            return;
        }

        this.naoRecebiEmail.unbind('click').click(() => {
            this.codigoEnviado.val('');

            this.removeNotifications();
            this.showSpinner();
            toast('Enviando código de verificação...', {
                duration: 10000,
                close: true
            });

            $.ajax({
                url: `/api${this.appUrl}/retry-email-verify.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(response).data, {
                        duration: 10000,
                        className: 'success',
                        close: true
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(xhr.responseText).error, {
                        duration: 10000,
                        className: 'error',
                        close: true
                    });
                }
            })

        });

        this.verificar.unbind('click').click(() => {
            this.removeNotifications();
            this.showSpinner();
            toast('Verificando código...', {
                duration: 10000,
                close: true
            });

            $.ajax({
                url: `/api${this.appUrl}/check-recovery.php`,
                data: { codigo: this.codigoEnviado.val() },
                xhrFields: {
                    withCredentials: true
                },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(response).data, {
                        duration: 10000,
                        className: 'success',
                        close: true
                    });
                    this.codigoEnviado.val('');
                    this.liberarCampoCadastrarSenha();

                    this.camadaNome.removeClass('d-none');
                    this.camadaEmail.addClass('d-none');

                    this.btnCadastrar.unbind('click').click(() => {
                        this.removeNotifications();
                        this.showSpinner();
                        toast('Aguarde a conclusão do cadastro...', {
                            duration: 10000,
                            close: true
                        });
                        const nome = this.campoNome.val();
                        const senha = this.cadastroSenha.val();
                        if (!nome.trim() || !senha.trim()) {
                            this.removeNotifications();
                            this.showSpinner('hide');
                            toast('Preencha todos os campos!', {
                                duration: 10000,
                                className: 'warning',
                                close: true
                            });
                            return;
                        }
                        $.ajax({
                            url: `/api${this.appUrl}/password-create.php`,
                            data: { nome, senha },
                            xhrFields: {
                                withCredentials: true
                            },
                            type: 'POST',
                            success: (response) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                toast(JSON.parse(response).data, {
                                    duration: 10000,
                                    className: 'success',
                                    close: true
                                });
                                this.camadaNome.addClass('d-none');
                                this.cadastrarSenha.addClass('d-none');
                                this.camadaEmail.removeClass('d-none');
                                this.camadaSenha.removeClass('d-none');
                            },
                            error: (xhr) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                toast(JSON.parse(xhr.responseText).error, {
                                    duration: 10000,
                                    className: 'error',
                                    close: true
                                });
                            }
                        });
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(xhr.responseText).error, {
                        duration: 10000,
                        className: 'error',
                        close: true
                    });
                }
            })
        });

        this.cancelarEsqueciSenhaEmail.unbind('click').click(() => {
            this.removeNotifications();
            this.showSpinner('hide');

            this.codigoEnviado.val('');

            this.camadaSenha.removeClass('d-none');
            this.codigoEmail.addClass('d-none');
            this.naoRecebiEmail.addClass('d-none');
            this.cadastrarSenha.addClass('d-none');
            this.cancelarEsqueciSenhaEmail.addClass('d-none');

            this.campoEmail.prop('disabled', false);
        });

        $(document).ready(() => {
            this.removeNotifications();
            this.showSpinner();
            toast('Enviando código de verificação...', {
                duration: 10000,
                close: true
            });
            $.ajax({
                url: `/api${this.appUrl}/password-create-mail.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    if (JSON.parse(response).status == "user_exists") {
                        toast(JSON.parse(response).data, {
                            duration: 10000,
                            className: 'warning',
                            close: true
                        });
                        return;
                    }
                    this.campoEmail.prop('disabled', true);
                    this.camadaSenha.addClass('d-none');
                    this.cadastrarSenha.addClass('d-none');
                    this.codigoEmail.removeClass('d-none');
                    this.naoRecebiEmail.removeClass('d-none');
                    this.cancelarEsqueciSenhaEmail.removeClass('d-none');

                    toast(JSON.parse(response).data, {
                        duration: 10000,
                        className: 'success',
                        close: true
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(xhr.responseText).error, {
                        duration: 10000,
                        className: 'error',
                        close: true
                    });
                }
            })
        })
    }

    passwordRecovery = () => {
        this.removeNotifications();
        this.showSpinner();
        const email = this.campoEmail.val();


        this.codigoEnviado.val('');

        if (!this.campoEmail.val().trim()) {
            this.removeNotifications();
            this.showSpinner('hide');
            toast("Preencha primeiro o campo email!", {
                duration: 10000,
                className: 'error',
                close: true
            });
            return;
        }
        this.camadaSenha.addClass('d-none');
        this.codigoEmail.removeClass('d-none');
        this.naoRecebiEmail.removeClass('d-none');
        this.cancelarEsqueciSenhaEmail.removeClass('d-none');
        this.cadastrarSenha.addClass('d-none');

        this.cancelarEsqueciSenhaEmail.unbind('click').click(() => {
            this.removeNotifications();
            this.showSpinner('hide');

            this.codigoEnviado.val('');

            this.camadaSenha.removeClass('d-none');
            this.codigoEmail.addClass('d-none');
            this.naoRecebiEmail.addClass('d-none');
            this.cadastrarSenha.addClass('d-none');
            this.cancelarEsqueciSenhaEmail.addClass('d-none');

            this.campoEmail.prop('disabled', false);
        });

        this.naoRecebiEmail.unbind('click').click(() => {
            this.codigoEnviado.val('');

            this.removeNotifications();
            this.showSpinner();
            toast('Enviando código de verificação...', {
                duration: 10000,
                close: true
            });
            $.ajax({
                url: `/api${this.appUrl}/retry-password-recovery.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(response).data, {
                        duration: 10000,
                        className: 'success',
                        close: true
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(xhr.responseText).error, {
                        duration: 10000,
                        className: 'error',
                        close: true
                    });
                }
            })

        });

        this.verificar.unbind('click').click(() => {
            this.removeNotifications();
            this.showSpinner();
            toast('Validando código de verificação...', {
                duration: 10000,
                close: true
            });

            $.ajax({
                url: `/api${this.appUrl}/check-recovery.php`,
                data: { codigo: this.codigoEnviado.val() },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(response).data, {
                        duration: 10000,
                        className: 'success',
                        close: true
                    });
                    this.codigoEnviado.val('');
                    this.liberarCampoCadastrarSenha();
                    this.btnCadastrar.unbind('click').click(() => {
                        this.removeNotifications();
                        this.showSpinner();
                        toast('Aguarde a conclusão da mudança...', {
                            duration: 10000,
                            close: true
                        });
                        const email = this.campoEmail.val();
                        const senha = this.cadastroSenha.val();
                        if (!senha.trim()) {
                            this.removeNotifications();
                            this.showSpinner('hide');
                            toast('Preencha todos os campos!', {
                                duration: 10000,
                                className: 'warning',
                                close: true
                            });
                            return;
                        }
                        $.ajax({
                            url: `/api${this.appUrl}/password-change.php`,
                            data: { email, senha },
                            xhrFields: {
                                withCredentials: true
                            },
                            type: 'POST',
                            success: (response) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                toast(JSON.parse(response).data, {
                                    duration: 10000,
                                    className: 'success',
                                    close: true
                                });
                                this.camadaNome.addClass('d-none');
                                this.cadastrarSenha.addClass('d-none');
                                this.camadaEmail.removeClass('d-none');
                                this.camadaSenha.removeClass('d-none');
                            },
                            error: (xhr) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                toast(JSON.parse(xhr.responseText).error, {
                                    duration: 10000,
                                    className: 'error',
                                    close: true
                                });
                            }
                        });
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(xhr.responseText).error, {
                        duration: 10000,
                        className: 'error',
                        close: true
                    });
                }
            })
        });

        $(document).ready(() => {
            this.campoEmail.prop('disabled', true);
            this.removeNotifications();
            this.showSpinner();
            toast('Enviando código de verificação...', {
                duration: 10000,
                close: true
            });
            $.ajax({
                url: `/api${this.appUrl}/password-recovery.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(response).data, {
                        duration: 10000,
                        className: 'success',
                        close: true
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    toast(JSON.parse(xhr.responseText).error, {
                        duration: 10000,
                        className: 'error',
                        close: true
                    });
                }
            })
        })
    }

    sairCadastro = () => {
        this.removeNotifications();
        this.showSpinner('hide');

        this.codigoEnviado.val('');

        this.camadaSenha.removeClass('d-none');
        this.codigoEmail.addClass('d-none');
        this.cancelarEsqueciSenhaEmail.addClass('d-none');
        this.cadastrarSenha.addClass('d-none');
    }
    removeNotifications = () => {
        for (let toast of document.querySelectorAll('.toastify')) {
            toast.remove();
        }
    }
    liberarCampoCadastrarSenha = () => {
        this.cadastrarSenha.removeClass('d-none');
        this.camadaSenha.addClass('d-none');
        this.codigoEmail.addClass('d-none');
    }
    showSpinner = (state) => {
        if (!state) {
            $('.spinner').removeClass('d-none');
            return;
        }
        $('.spinner').addClass('d-none');
    }
}
export { Login };