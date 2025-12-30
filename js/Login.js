class Login {
    patterns =  {
        email: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/,
        nomedeusuario: /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/,
        senha: /.*\S.*/
    }

    appUrl;
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
    constructor(appUrl) {
        this.appUrl = appUrl
    }
    login = (callback) => {
        this.removeNotifications();
        this.showSpinner();
        const email = this.campoEmail.val();
        this.campoSenha.attr('type', 'text');
        const senha = this.campoSenha.val();
        this.campoSenha.attr('type', 'password');
        $.ajax({
            url: `/try-login.php`,
            data: { email, senha },
            type: 'POST',
            success: callback,
            error: (xhr) => {
                this.showSpinner('hide');
                Toastify({
                    text: JSON.parse(xhr.responseText).error,
                    duration: 10000,
                    className: 'error',
                    close: true
                }).showToast();
            }
        })
    }

    naoTenhoConta = () => {
        this.removeNotifications();
        this.showSpinner();
        const email = this.campoEmail.val();
        this.codigoEnviado.val('');

        if(!email.trim()) {
            this.showSpinner('hide');
            Toastify({
                text: "Preencha primeiro o campo email!",
                duration: 10000,
                className: 'error',
                close: true
            }).showToast();
            return;
        }

        this.naoRecebiEmail.unbind('click').click(()=>{
            this.codigoEnviado.val('');

            this.removeNotifications();
            this.showSpinner();
            Toastify({
                text: 'Enviando código de verificação...',
                duration: 10000,
                close: true
            }).showToast();
                        
            $.ajax({
                url: `/retry-email-verify.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(response).data,
                        duration: 10000,
                        className: 'success',
                        close: true
                    }).showToast();
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(xhr.responseText).error,
                        duration: 10000,
                        className: 'error',
                        close: true
                    }).showToast();
                }
            })

        });
        
        this.verificar.unbind('click').click(()=>{
            this.removeNotifications();
            this.showSpinner();
            Toastify({
                text: 'Verificando código...',
                duration: 10000,
                close: true
            }).showToast();

            $.ajax({
                url: `/check-recovery.php`,
                data: { codigo: this.codigoEnviado.val() },
                xhrFields: {
                    withCredentials: true
                },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(response).data,
                        duration: 10000,
                        className: 'success',
                        close: true
                    }).showToast();
                    this.codigoEnviado.val('');
                    this.liberarCampoCadastrarSenha();

                    this.camadaNome.removeClass('d-none');
                    this.camadaEmail.addClass('d-none');

                    this.btnCadastrar.unbind('click').click(()=>{
                        this.removeNotifications();
                        this.showSpinner();
                        Toastify({
                            text: 'Aguarde a conclusão do cadastro...',
                            duration: 10000,
                            close: true
                        }).showToast();
                        const nome = this.campoNome.val();
                        const senha = this.cadastroSenha.val();
                        if(!nome.trim() || !senha.trim()) {
                            this.removeNotifications();
                            this.showSpinner('hide');
                            Toastify({
                                text: 'Preencha todos os campos!',
                                duration: 10000,
                                className: 'warning',
                                close: true
                            }).showToast();
                            return;
                        }
                        $.ajax({
                            url: `/password-create.php`,
                            data: { nome, senha },
                            xhrFields: {
                                withCredentials: true
                            },
                            type: 'POST',
                            success: (response) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                Toastify({
                                    text: JSON.parse(response).data,
                                    duration: 10000,
                                    className: 'success',
                                    close: true
                                }).showToast();
                                this.camadaNome.addClass('d-none');
                                this.cadastrarSenha.addClass('d-none');
                                this.camadaEmail.removeClass('d-none');
                                this.camadaSenha.removeClass('d-none');
                            },
                            error: (xhr) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                Toastify({
                                    text: JSON.parse(xhr.responseText).error,
                                    duration: 10000,
                                    className: 'error',
                                    close: true
                                }).showToast();
                            }
                        });
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(xhr.responseText).error,
                        duration: 10000,
                        className: 'error',
                        close: true
                    }).showToast();
                }
            })
        });
        
        this.cancelarEsqueciSenhaEmail.unbind('click').click(()=> {
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

        $(document).ready(()=>{
            this.removeNotifications();
            this.showSpinner();
            Toastify({
                text: 'Enviando código de verificação...',
                duration: 10000,
                close: true
            }).showToast();
            $.ajax({
                url: `/password-create-mail.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    if(JSON.parse(response).status == "user_exists") {
                        Toastify({
                            text: JSON.parse(response).data,
                            duration: 10000,
                            className: 'warning',
                            close: true
                        }).showToast();
                        return;
                    }
                    this.campoEmail.prop('disabled', true);
                    this.camadaSenha.addClass('d-none');
                    this.cadastrarSenha.addClass('d-none');
                    this.codigoEmail.removeClass('d-none');
                    this.naoRecebiEmail.removeClass('d-none');
                    this.cancelarEsqueciSenhaEmail.removeClass('d-none');
                    
                    Toastify({
                        text: JSON.parse(response).data,
                        duration: 10000,
                        className: 'success',
                        close: true
                    }).showToast();
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(xhr.responseText).error,
                        duration: 10000,
                        className: 'error',
                        close: true
                    }).showToast();
                }
            })
        })
    }

    passwordRecovery = () => {          
        this.removeNotifications();
        this.showSpinner();  
        const email = this.campoEmail.val();


        this.codigoEnviado.val('');

        if(!this.campoEmail.val().trim()) {
            this.removeNotifications();
            this.showSpinner('hide');
            Toastify({
                text: "Preencha primeiro o campo email!",
                duration: 10000,
                className: 'error',
                close: true
            }).showToast();
            return;
        }
        this.camadaSenha.addClass('d-none');
        this.codigoEmail.removeClass('d-none');
        this.naoRecebiEmail.removeClass('d-none');
        this.cancelarEsqueciSenhaEmail.removeClass('d-none');
        this.cadastrarSenha.addClass('d-none');
        
        this.cancelarEsqueciSenhaEmail.unbind('click').click(()=> {
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

        this.naoRecebiEmail.unbind('click').click(()=>{
            this.codigoEnviado.val('');

            this.removeNotifications();
            this.showSpinner();
            Toastify({
                text: 'Enviando código de verificação...',
                duration: 10000,
                close: true
            }).showToast();
            $.ajax({
                url: `/retry-password-recovery.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(response).data,
                        duration: 10000,
                        className: 'success',
                        close: true
                    }).showToast();
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(xhr.responseText).error,
                        duration: 10000,
                        className: 'error',
                        close: true
                    }).showToast();
                }
            })

        });
        
        this.verificar.unbind('click').click(()=>{
            this.removeNotifications();
            this.showSpinner();
            Toastify({
                text: 'Validando código de verificação...',
                duration: 10000,
                close: true
            }).showToast();

            $.ajax({
                url: `/check-recovery.php`,
                data: { codigo: this.codigoEnviado.val() },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(response).data,
                        duration: 10000,
                        className: 'success',
                        close: true
                    }).showToast();
                    this.codigoEnviado.val('');
                    this.liberarCampoCadastrarSenha();
                    this.btnCadastrar.unbind('click').click(()=>{
                        this.removeNotifications();
                        this.showSpinner();
                        Toastify({
                            text: 'Aguarde a conclusão da mudança...',
                            duration: 10000,
                            close: true
                        }).showToast();
                        const email = this.campoEmail.val();
                        const senha = this.cadastroSenha.val();
                        if(!senha.trim()) {
                            this.removeNotifications();
                            this.showSpinner('hide');
                            Toastify({
                                text: 'Preencha todos os campos!',
                                duration: 10000,
                                className: 'warning',
                                close: true
                            }).showToast();
                            return;
                        }
                        $.ajax({
                            url: `/password-change.php`,
                            data: { email, senha },
                            xhrFields: {
                                withCredentials: true
                            },
                            type: 'POST',
                            success: (response) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                Toastify({
                                    text: JSON.parse(response).data,
                                    duration: 10000,
                                    className: 'success',
                                    close: true
                                }).showToast();
                                this.camadaNome.addClass('d-none');
                                this.cadastrarSenha.addClass('d-none');
                                this.camadaEmail.removeClass('d-none');
                                this.camadaSenha.removeClass('d-none');
                            },
                            error: (xhr) => {
                                this.removeNotifications();
                                this.showSpinner('hide');
                                Toastify({
                                    text: JSON.parse(xhr.responseText).error,
                                    duration: 10000,
                                    className: 'error',
                                    close: true
                                }).showToast();
                            }
                        });
                    });
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(xhr.responseText).error,
                        duration: 10000,
                        className: 'error',
                        close: true
                    }).showToast();
                }
            })
        });

        $(document).ready(()=>{
            this.campoEmail.prop('disabled', true);
            this.removeNotifications();
            this.showSpinner();
            Toastify({
                text: 'Enviando código de verificação...',
                duration: 10000,
                close: true
            }).showToast();
            $.ajax({
                url: `/password-recovery.php`,
                data: { email },
                type: 'POST',
                success: (response) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(response).data,
                        duration: 10000,
                        className: 'success',
                        close: true
                    }).showToast();
                },
                error: (xhr) => {
                    this.removeNotifications();
                    this.showSpinner('hide');
                    Toastify({
                        text: JSON.parse(xhr.responseText).error,
                        duration: 10000,
                        className: 'error',
                        close: true
                    }).showToast();
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
        for(let toast of document.querySelectorAll('.toastify')) {
            toast.remove();
        }
    }
    liberarCampoCadastrarSenha = () => {
        this.cadastrarSenha.removeClass('d-none');
        this.camadaSenha.addClass('d-none');
        this.codigoEmail.addClass('d-none');
    }
    showSpinner = (state) => {
        if(!state) {
            $('.spinner').removeClass('d-none');
            return;
        }
        $('.spinner').addClass('d-none');
    }
    setup = (login, loginUrlCallback) => {
        $('#login').click((event)=>{login.login((response) => {
            this.showSpinner('hide');
            Toastify({
                text: JSON.parse(response).data,
                duration: 10000,
                close: true
            }).showToast();
            setTimeout(()=>{
                window.location.href=loginUrlCallback;
            }, 3000);

        })});
        
        $('#sair').click(()=>{
            $.get(`/sair.php`,() => {
                window.location.href = appUrl;
            });
        });

        $('#nao-tenho-conta').click(login.naoTenhoConta);

        $('#sair-cadastro').click(login.sairCadastro);

        $('#esqueci-senha').click(login.passwordRecovery);
    }
}