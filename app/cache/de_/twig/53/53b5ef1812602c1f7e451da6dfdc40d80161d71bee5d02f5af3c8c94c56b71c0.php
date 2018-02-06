<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:account_show_block_actions_js.html.twig */
class __TwigTemplate_837d14a3b10e5c5d5bc290dc45a90f83276e29f53984c83db569721aaea06cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_166a96228481a1ddac3df8f6e5b92a5cf699c417ae14e5a2ae7572b6ae37fd1e = $this->env->getExtension("native_profiler");
        $__internal_166a96228481a1ddac3df8f6e5b92a5cf699c417ae14e5a2ae7572b6ae37fd1e->enter($__internal_166a96228481a1ddac3df8f6e5b92a5cf699c417ae14e5a2ae7572b6ae37fd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:account_show_block_actions_js.html.twig"));

        // line 1
        echo "<script type=text/javascript>
    jQuery(document).ready(function(){
        var account = (function(){
            var tab = {
                views:{ },
                init: function(){
                    tabViewsFactory.hideAll();
                    tabViewsFactory.fillForm();
                }
            };

            var tabViewsFactory = {
                show: function(){
                    \$('.clearfix').css('display', 'block');
                },
                hideAll: function(){
                    \$('.custom-head').next('.clearfix').css('display', 'none');
                    \$('.custom-head').next('.clearfix').first().css('display', 'block');
                },
                fillForm: function(){
                    var ajaxUrl = \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/accountInfo/getFormData\";

                    console.log(ajaxUrl);

                    \$.ajax(ajaxUrl, {
                        'type': 'POST',
                        'success': function (response) {
                            var industries = response.industries;
                            var products = response.products;
                            var statuses = response.statuses;
                            var cards = response.cards;

                            \$(industries).each(function(ind,val){
                               \$('#industry').append(\$(\"<option></option>\")
                                             .attr(\"value\",ind)
                                             .text(val));
                            });

                            \$(products).each(function(ind,val){
                                \$('#product').append(\$(\"<option></option>\")
                                        .attr(\"value\",val.id)
                                        .attr(\"data-mRate\",val.mRate)
                                        .attr(\"data-yRate\",val.yRate)
                                        .text(val.name));
                            });

                            \$(cards).each(function(ind,val){
                                \$('#cardType').append(\$(\"<option></option>\")
                                        .attr(\"value\",ind)
                                        .text(val));
                            });

                            \$('#timeZone').timezones();
                        },
                        'error': function (error) {
                            console.log('ajax error');
                            console.log(error);
                        }
                    });
                }
            };

            return tab;
        })();


        \$('#account-info-create').on('click', 'button', createAccount);
        \$('.close').click(function(e){
            \$(this).parent().remove();
        });

        \$('#account-info-edit').on('click', 'button', editAccount);
        \$('.close').click(function(e){
            \$(this).parent().remove();
        });

        \$('.active-select').change(considerAmount);

        \$(\".digits\").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                \$(this).next().html(\"Digits only!\").show().fadeOut(\"slow\");
                return false;
            }
        });

        account.init();
    });


    function considerAmount() {
        var frequency = \$('select#frequency option:selected').val();

        if(frequency == 0) {
            // monthly
            var attrName = 'data-mRate';
        }else {
            // yearly
            var attrName = 'data-yRate';
        }

        var rate = \$('select#product option:selected').attr(attrName);
        var users = \$('select#usersNumber option:selected').val();

        var amount = rate * users;

        \$('#amount').val(amount.toFixed(2));
    }


    function createAccount(e) {

        var selfWrap = \$('#account-info-create');
        var form = selfWrap.find('form')[0];

        var spanError = \$('span.error');
        spanError.next().remove();
        spanError.remove();

        var error = false;
        var messages = [];
        var data = {};

        data['firstName'] = \$('#firstName').val();
        data['lastName'] = \$('#lastName').val();
        data['userName'] = \$('#userName').val();
        data['email'] = \$('#email').val();
        data['companyName'] = \$('#companyName').val();
        data['phone'] = \$('#phone').val();
        data['ext'] = \$('#ext').val();
        data['address1'] = \$('#address1').val();
        data['address2'] = \$('#address2').val();
        data['city'] = \$('#city').val();
        data['state'] = \$('#state').val();
        data['postalCode'] = \$('#postalCode').val();
        data['country'] = \$('#country').val();
        data['cardFirstName'] = \$('#cardFirstName').val();
        data['cardLastName'] = \$('#cardLastName').val();
        data['cardNumber'] = \$('#cardNumber').val();
        data['cardCode'] = \$('#cardCode').val();
        data['acceptTerms'] = \$('#acceptTerms').val();
        data['amount'] = \$('#amount').val();

        if (\$('#acceptTerms').is(\":checked\")){
            data['acceptTerms'] = 1;
        }else{
            data['acceptTerms'] = 0;
            error = true;
            messages.push('You should accept Terms and Privacy Policy.');
        }

        \$('.form-control').each(function(){
            if(\$(this).val() == ''){
                if(!error){
                    messages.push('All of the fields should be filled!');
                }
                error = true;
            }
        });


        data['industry'] = \$('#industry option:selected').val();
        data['product'] = \$('#product option:selected').val();
        data['timeZone'] = \$('#timeZone option:selected').val();
        data['usersNumber'] = \$('#usersNumber option:selected').val();
        data['cardType'] = \$('#cardType option:selected').val();
        data['frequency'] = \$('#frequency option:selected').val();
        data['month'] = \$('#month option:selected').val();
        data['year'] = \$('#year option:selected').val();
        data['timeZone'] = \$('#timeZone option:selected').val().replace(/^\\(.*\\)\$/gi,'');

        if(!isEmail(data['email'])) {
            error = true;
            messages.push('Sorry, email is not valid.');
        }

        if(!error){
            var ajaxUrl = \"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/accountInfo/createAccount\";

            \$.ajax(ajaxUrl, {
                'data': data,
                'type': 'POST',
                'success': function (response) {
                    console.log('ajax success');
                    form.reset();
                    location.reload();
                },
                'error': function (error) {
                    //messages = error.responseJSON.message;
                    messages = \$.parseJSON(error.responseText).message;
                    \$(messages).each(function(ind, val){
                        if(\$.type(val) == 'object') {
                            if (\$.type(val[ind]) != 'undefined'){
                                \$('div.before-error').after(\"<span class='error'>\" + val[ind] + \"</span><br />\");
                            }else{
                                \$('div.before-error').after(\"<span class='error'>\" + val[ind+1] + \"</span><br />\");
                            }
                        }else{
                            \$('div.before-error').after(\"<span class='error'>\"+val+\"</span><br />\");
                        }
                    });
                    form.reset();
                }
            });
        }else{
            \$(messages).each(function(ind, val){
                \$('div.before-error').after(\"<span class='error'>\"+val+\"</span><br />\");
            });
        }

        e.preventDefault();
        return false;
    }

    function editAccount(e) {
        \$('span.error').next().remove();
        \$('span.error').remove();

        var error = false;
        var messages = [];
        var data = {};

        data['cardFirstName'] = \$('#cardFirstName').val();
        data['cardLastName'] = \$('#cardLastName').val();
        data['cardNumber'] = \$('#cardNumber').val();
        data['cardCode'] = \$('#cardCode').val();
        data['acceptTerms'] = \$('#acceptTerms').val();
        data['amount'] = \$('#amount').val();

        if (\$('#acceptTerms').is(\":checked\")){
            data['acceptTerms'] = 1;
        }else{
            data['acceptTerms'] = 0;
            error = true;
            messages.push('You should accept Terms and Privacy Policy.');
        }

        \$('.form-control').each(function(){
            if(\$(this).val() == ''){
                if(!error){
                    messages.push('All of the fields should be filled!');
                }
                error = true;
            }
        });

        data['cardType'] = \$('#cardType option:selected').val();
        data['month'] = \$('#month option:selected').val();
        data['year'] = \$('#year option:selected').val();
        data['product'] = \$('#product option:selected').val();
        data['timeZone'] = \$('#timeZone option:selected').val().replace(/^\\(.*\\)\$/gi,'');
        data['frequency'] = \$('#frequency option:selected').val();
        data['usersNumber'] = \$('#usersNumber option:selected').val();

        if(!error){
            var ajaxUrl = \"";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/accountInfo/editAccount\";

            \$.ajax(ajaxUrl, {
                'data': data,
                'type': 'POST',
                'success': function (response) {
                    console.log('ajax success');
                    window.location.href = '";
        // line 263
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "';
                },
                'error': function (error) {
                    messages = error.responseJSON.message;
                    console.log('ajax error');
                    messages = error.responseText.message;
                    \$(messages).each(function(ind, val){
                        \$('div.before-error').after(\"<span class='error'>\"+val+\"</span><br />\");
                    });
                }
            });
        }else{
            \$(messages).each(function(ind, val){
                \$('div.before-error').after(\"<span class='error'>\"+val+\"</span><br />\");
            });
        }

        e.preventDefault();
        return false;
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        return regex.test(email);
    }

    function validate(obj) {
        console.log(obj);
        return true;
    }

    // уезжайте, спасайте себя

</script>
";
        
        $__internal_166a96228481a1ddac3df8f6e5b92a5cf699c417ae14e5a2ae7572b6ae37fd1e->leave($__internal_166a96228481a1ddac3df8f6e5b92a5cf699c417ae14e5a2ae7572b6ae37fd1e_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:account_show_block_actions_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 263,  285 => 256,  204 => 178,  44 => 21,  22 => 1,);
    }
}
/* <script type=text/javascript>*/
/*     jQuery(document).ready(function(){*/
/*         var account = (function(){*/
/*             var tab = {*/
/*                 views:{ },*/
/*                 init: function(){*/
/*                     tabViewsFactory.hideAll();*/
/*                     tabViewsFactory.fillForm();*/
/*                 }*/
/*             };*/
/* */
/*             var tabViewsFactory = {*/
/*                 show: function(){*/
/*                     $('.clearfix').css('display', 'block');*/
/*                 },*/
/*                 hideAll: function(){*/
/*                     $('.custom-head').next('.clearfix').css('display', 'none');*/
/*                     $('.custom-head').next('.clearfix').first().css('display', 'block');*/
/*                 },*/
/*                 fillForm: function(){*/
/*                     var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/accountInfo/getFormData";*/
/* */
/*                     console.log(ajaxUrl);*/
/* */
/*                     $.ajax(ajaxUrl, {*/
/*                         'type': 'POST',*/
/*                         'success': function (response) {*/
/*                             var industries = response.industries;*/
/*                             var products = response.products;*/
/*                             var statuses = response.statuses;*/
/*                             var cards = response.cards;*/
/* */
/*                             $(industries).each(function(ind,val){*/
/*                                $('#industry').append($("<option></option>")*/
/*                                              .attr("value",ind)*/
/*                                              .text(val));*/
/*                             });*/
/* */
/*                             $(products).each(function(ind,val){*/
/*                                 $('#product').append($("<option></option>")*/
/*                                         .attr("value",val.id)*/
/*                                         .attr("data-mRate",val.mRate)*/
/*                                         .attr("data-yRate",val.yRate)*/
/*                                         .text(val.name));*/
/*                             });*/
/* */
/*                             $(cards).each(function(ind,val){*/
/*                                 $('#cardType').append($("<option></option>")*/
/*                                         .attr("value",ind)*/
/*                                         .text(val));*/
/*                             });*/
/* */
/*                             $('#timeZone').timezones();*/
/*                         },*/
/*                         'error': function (error) {*/
/*                             console.log('ajax error');*/
/*                             console.log(error);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             };*/
/* */
/*             return tab;*/
/*         })();*/
/* */
/* */
/*         $('#account-info-create').on('click', 'button', createAccount);*/
/*         $('.close').click(function(e){*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         $('#account-info-edit').on('click', 'button', editAccount);*/
/*         $('.close').click(function(e){*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         $('.active-select').change(considerAmount);*/
/* */
/*         $(".digits").keypress(function (e) {*/
/*             //if the letter is not digit then display error and don't type anything*/
/*             if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {*/
/*                 $(this).next().html("Digits only!").show().fadeOut("slow");*/
/*                 return false;*/
/*             }*/
/*         });*/
/* */
/*         account.init();*/
/*     });*/
/* */
/* */
/*     function considerAmount() {*/
/*         var frequency = $('select#frequency option:selected').val();*/
/* */
/*         if(frequency == 0) {*/
/*             // monthly*/
/*             var attrName = 'data-mRate';*/
/*         }else {*/
/*             // yearly*/
/*             var attrName = 'data-yRate';*/
/*         }*/
/* */
/*         var rate = $('select#product option:selected').attr(attrName);*/
/*         var users = $('select#usersNumber option:selected').val();*/
/* */
/*         var amount = rate * users;*/
/* */
/*         $('#amount').val(amount.toFixed(2));*/
/*     }*/
/* */
/* */
/*     function createAccount(e) {*/
/* */
/*         var selfWrap = $('#account-info-create');*/
/*         var form = selfWrap.find('form')[0];*/
/* */
/*         var spanError = $('span.error');*/
/*         spanError.next().remove();*/
/*         spanError.remove();*/
/* */
/*         var error = false;*/
/*         var messages = [];*/
/*         var data = {};*/
/* */
/*         data['firstName'] = $('#firstName').val();*/
/*         data['lastName'] = $('#lastName').val();*/
/*         data['userName'] = $('#userName').val();*/
/*         data['email'] = $('#email').val();*/
/*         data['companyName'] = $('#companyName').val();*/
/*         data['phone'] = $('#phone').val();*/
/*         data['ext'] = $('#ext').val();*/
/*         data['address1'] = $('#address1').val();*/
/*         data['address2'] = $('#address2').val();*/
/*         data['city'] = $('#city').val();*/
/*         data['state'] = $('#state').val();*/
/*         data['postalCode'] = $('#postalCode').val();*/
/*         data['country'] = $('#country').val();*/
/*         data['cardFirstName'] = $('#cardFirstName').val();*/
/*         data['cardLastName'] = $('#cardLastName').val();*/
/*         data['cardNumber'] = $('#cardNumber').val();*/
/*         data['cardCode'] = $('#cardCode').val();*/
/*         data['acceptTerms'] = $('#acceptTerms').val();*/
/*         data['amount'] = $('#amount').val();*/
/* */
/*         if ($('#acceptTerms').is(":checked")){*/
/*             data['acceptTerms'] = 1;*/
/*         }else{*/
/*             data['acceptTerms'] = 0;*/
/*             error = true;*/
/*             messages.push('You should accept Terms and Privacy Policy.');*/
/*         }*/
/* */
/*         $('.form-control').each(function(){*/
/*             if($(this).val() == ''){*/
/*                 if(!error){*/
/*                     messages.push('All of the fields should be filled!');*/
/*                 }*/
/*                 error = true;*/
/*             }*/
/*         });*/
/* */
/* */
/*         data['industry'] = $('#industry option:selected').val();*/
/*         data['product'] = $('#product option:selected').val();*/
/*         data['timeZone'] = $('#timeZone option:selected').val();*/
/*         data['usersNumber'] = $('#usersNumber option:selected').val();*/
/*         data['cardType'] = $('#cardType option:selected').val();*/
/*         data['frequency'] = $('#frequency option:selected').val();*/
/*         data['month'] = $('#month option:selected').val();*/
/*         data['year'] = $('#year option:selected').val();*/
/*         data['timeZone'] = $('#timeZone option:selected').val().replace(/^\(.*\)$/gi,'');*/
/* */
/*         if(!isEmail(data['email'])) {*/
/*             error = true;*/
/*             messages.push('Sorry, email is not valid.');*/
/*         }*/
/* */
/*         if(!error){*/
/*             var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/accountInfo/createAccount";*/
/* */
/*             $.ajax(ajaxUrl, {*/
/*                 'data': data,*/
/*                 'type': 'POST',*/
/*                 'success': function (response) {*/
/*                     console.log('ajax success');*/
/*                     form.reset();*/
/*                     location.reload();*/
/*                 },*/
/*                 'error': function (error) {*/
/*                     //messages = error.responseJSON.message;*/
/*                     messages = $.parseJSON(error.responseText).message;*/
/*                     $(messages).each(function(ind, val){*/
/*                         if($.type(val) == 'object') {*/
/*                             if ($.type(val[ind]) != 'undefined'){*/
/*                                 $('div.before-error').after("<span class='error'>" + val[ind] + "</span><br />");*/
/*                             }else{*/
/*                                 $('div.before-error').after("<span class='error'>" + val[ind+1] + "</span><br />");*/
/*                             }*/
/*                         }else{*/
/*                             $('div.before-error').after("<span class='error'>"+val+"</span><br />");*/
/*                         }*/
/*                     });*/
/*                     form.reset();*/
/*                 }*/
/*             });*/
/*         }else{*/
/*             $(messages).each(function(ind, val){*/
/*                 $('div.before-error').after("<span class='error'>"+val+"</span><br />");*/
/*             });*/
/*         }*/
/* */
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/*     function editAccount(e) {*/
/*         $('span.error').next().remove();*/
/*         $('span.error').remove();*/
/* */
/*         var error = false;*/
/*         var messages = [];*/
/*         var data = {};*/
/* */
/*         data['cardFirstName'] = $('#cardFirstName').val();*/
/*         data['cardLastName'] = $('#cardLastName').val();*/
/*         data['cardNumber'] = $('#cardNumber').val();*/
/*         data['cardCode'] = $('#cardCode').val();*/
/*         data['acceptTerms'] = $('#acceptTerms').val();*/
/*         data['amount'] = $('#amount').val();*/
/* */
/*         if ($('#acceptTerms').is(":checked")){*/
/*             data['acceptTerms'] = 1;*/
/*         }else{*/
/*             data['acceptTerms'] = 0;*/
/*             error = true;*/
/*             messages.push('You should accept Terms and Privacy Policy.');*/
/*         }*/
/* */
/*         $('.form-control').each(function(){*/
/*             if($(this).val() == ''){*/
/*                 if(!error){*/
/*                     messages.push('All of the fields should be filled!');*/
/*                 }*/
/*                 error = true;*/
/*             }*/
/*         });*/
/* */
/*         data['cardType'] = $('#cardType option:selected').val();*/
/*         data['month'] = $('#month option:selected').val();*/
/*         data['year'] = $('#year option:selected').val();*/
/*         data['product'] = $('#product option:selected').val();*/
/*         data['timeZone'] = $('#timeZone option:selected').val().replace(/^\(.*\)$/gi,'');*/
/*         data['frequency'] = $('#frequency option:selected').val();*/
/*         data['usersNumber'] = $('#usersNumber option:selected').val();*/
/* */
/*         if(!error){*/
/*             var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/accountInfo/editAccount";*/
/* */
/*             $.ajax(ajaxUrl, {*/
/*                 'data': data,*/
/*                 'type': 'POST',*/
/*                 'success': function (response) {*/
/*                     console.log('ajax success');*/
/*                     window.location.href = '{{ path('dashboard') }}';*/
/*                 },*/
/*                 'error': function (error) {*/
/*                     messages = error.responseJSON.message;*/
/*                     console.log('ajax error');*/
/*                     messages = error.responseText.message;*/
/*                     $(messages).each(function(ind, val){*/
/*                         $('div.before-error').after("<span class='error'>"+val+"</span><br />");*/
/*                     });*/
/*                 }*/
/*             });*/
/*         }else{*/
/*             $(messages).each(function(ind, val){*/
/*                 $('div.before-error').after("<span class='error'>"+val+"</span><br />");*/
/*             });*/
/*         }*/
/* */
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/*     function isEmail(email) {*/
/*         var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;*/
/*         return regex.test(email);*/
/*     }*/
/* */
/*     function validate(obj) {*/
/*         console.log(obj);*/
/*         return true;*/
/*     }*/
/* */
/*     // уезжайте, спасайте себя*/
/* */
/* </script>*/
/* */
