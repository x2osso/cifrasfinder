var Script = function () {

    var parsleyForm = jQuery(".parsley-form");

    var applyParsley = function () {
        jQuery(this).parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout').find("h4").html('Oh não!');
            $('.bs-callout').find(".msg").html('Há Campos sem preencher :(');
            $('.bs-callout').addClass('bs-callout-warning').toggleClass('hidden', ok);
        })
                .on('form:submit', function (formInstance) {

                    if ($(".ckeditor").length) {
                        for (instance in CKEDITOR.instances) {
                            CKEDITOR.instances[instance].updateElement();
                        }
                    }

                    var myForm = formInstance.$element,
                            call = myForm.attr("data-callback"),
                            btSubmit = myForm.find("button[type='submit']");

                    var nomeform = myForm.attr('name');

                    if (nomeform == '' || nomeform == undefined) {
                        alert("Formulário sem atributo name é Obrigatório!");
                    }
                    var formData = new FormData($("form[name='" + nomeform + "']")[0]);

                    jQuery.ajax({
                        url: myForm.attr('action'),
                        type: 'POST',
                        dataType: 'JSON',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        xhr: function () {  // Custom XMLHttpRequest
                            var myXhr = $.ajaxSettings.xhr();
                            if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                                myXhr.upload.addEventListener('progress', function () {
                                    /* faz alguma coisa durante o progresso do upload */
                                }, false);
                            }
                            return myXhr;
                        },
                        beforeSend: function () {
                            //btSubmit.button('loading');
                            $('.btn_salvar').button('loading');
                            $('.btn_salvar').attr("disabled", true);
                            $('.btn_salvar').removeClass("disabled");
                        },
                        complete: function () {
                            $('.btn_salvar').attr("disabled", false);
                            $('.btn_salvar').removeClass("disabled");
                            $('.btn_salvar').html('Salvar');
                            if($('.btn_salvar').attr('data-html')){
                                $('.btn_salvar').html($('.btn_salvar').attr('data-html'));
                            }
                        },
                        success: function (data) {
                            $('.btn_salvar').html('Salvar');
                            $('.btn_salvar').attr("disabled", false);
                            $('.btn_salvar').removeClass("disabled");
                            var status = data.status,
                                    msg = data.msg,
                                    title = data.title,
                                    direciona = data.url,
                                    clearInput = data.clear,
                                    noSwal = data.noswal,
                                    alert = myForm.find(".messages .bs-callout");

                            // ---------------------
                            // Exibe mensagem de sucesso/erro para usuário
                            // ---------------------
                            if(!noSwal){
                                swal(
                                    title,
                                    msg,
                                    status
                                    );
                            }
                            // ---------------------
                            // Função auxiliar extra
                            // ---------------------
                            if (call != '' && call != undefined) {
                                console.log(call);
                                if (jQuery.isFunction(customFunction[call])) {
                                    customFunction[call](data);
                                }
                            }

                            if (clearInput) {
                                myForm.find("input[type='text'],input[type='number'], select, input[type='email'], input[type='password']").val("");
                                myForm.find("textarea").val("");
                            }

                            if (direciona) {
                                setTimeout(function () {
                                    window.location.href = direciona;
                                    return false;
                                }, 500);
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                           btSubmit.attr("disabled", false);
                            $('.btn_salvar').html('Salvar');
                        }
                    });
                    return false;
                });
    };

    /* Adicionar validação de CPF */
    var erro_cpf_cnpj = '';
    window.Parsley
        .addValidator('validcpfcnpj', function (value, requirement) {

            var novovalor =  value.replace(/[^0-9]/g, '');
            if(novovalor.length == 11){

                erro_cpf_cnpj = 'Este campo deve ser um CPF válido.';
                 var   cpf        = value.replace(/[^0-9]/g, '')
                , compareCPF = cpf.substring(0, 9)
                , add        = 0
                , i, u
                , invalidCPF = [
                    '00000000000',
                    '11111111111',
                    '22222222222',
                    '33333333333',
                    '44444444444',
                    '55555555555',
                    '66666666666',
                    '77777777777',
                    '88888888888',
                    '99999999999'
                ]
                ;


                if ( cpf.length < 11 || $.inArray(cpf, invalidCPF) !== -1 ) {
                    return false;
                }

                for (i = 8, u = 2; i >= 0; i--, u++) {
                    add = add + parseInt(cpf.substring(i, i+1)) * u;
                }

                compareCPF = compareCPF + ( (add % 11) < 2 ? 0 : 11 - (add % 11));
                add = 0

                for (i = 9, u = 2; i >= 0; i--, u++) {
                    add = add + parseInt(cpf.substring(i, i+1)) * u;
                }

                compareCPF = compareCPF + ( (add % 11) < 2 ? 0 : 11 - (add % 11));

                if (compareCPF !== cpf) {
                    return false;
                }

                return true;
            }else{

                 erro_cpf_cnpj = 'Este campo deve ser um CPF válido.';

                  var   cnpj        = value.replace(/[^0-9]/g, '')
                        , len         = cnpj.length - 2
                        , numbers     = cnpj.substring(0,len)
                        , digits      = cnpj.substring(len)
                        , add         = 0
                        , pos         = len - 7
                        , invalidCNPJ = [
                            '00000000000000',
                            '11111111111111',
                            '22222222222222',
                            '33333333333333',
                            '44444444444444',
                            '55555555555555',
                            '66666666666666',
                            '77777777777777',
                            '88888888888888',
                            '99999999999999'
                        ]
                        , result
                        ;


                    if ( cnpj.length < 11 || $.inArray(cnpj, invalidCNPJ) !== -1 ) {
                        return false;
                    }

                    for (i = len; i >= 1; i--) {
                        add = add + parseInt(numbers.charAt(len - i)) * pos--;
                        if (pos < 2) { pos = 9; }
                    }

                    result = (add % 11) < 2 ? 0 : 11 - (add % 11);
                    if (result != digits.charAt(0)) {
                        return false;
                    }

                    len = len + 1;
                    numbers = cnpj.substring(0,len);
                    add = 0;
                    pos = len - 7;

                    for (i = 13; i >= 1; i--) {
                        add = add + parseInt(numbers.charAt(len - i)) * pos--;
                        if (pos < 2) { pos = 9; }
                    }

                    result = (add % 11) < 2 ? 0 : 11 - (add % 11);
                    if (result != digits.charAt(1)) {
                        return false;
                    }

                    return true;

            }


    }, 32)
    .addMessage('pt-br', 'validcpfcnpj', erro_cpf_cnpj);

    jQuery.each(parsleyForm, function (index, el) {
        applyParsley.apply(el);
    });

}();













































/*Flavio R. Gomes - 2021*/
