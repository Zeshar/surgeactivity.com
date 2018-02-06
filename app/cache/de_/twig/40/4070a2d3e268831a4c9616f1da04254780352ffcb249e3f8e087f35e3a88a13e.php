<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_show_block_actions_js.html.twig */
class __TwigTemplate_d1251c18282f89156912695c92bf1004e14714f18cc15788448a1fee0abdbe6c extends Twig_Template
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
        $__internal_a3e1c1c9411861a31686578f438d869f6348f7abd13316d3b4cf72a82ce51ed9 = $this->env->getExtension("native_profiler");
        $__internal_a3e1c1c9411861a31686578f438d869f6348f7abd13316d3b4cf72a82ce51ed9->enter($__internal_a3e1c1c9411861a31686578f438d869f6348f7abd13316d3b4cf72a82ce51ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_show_block_actions_js.html.twig"));

        // line 1
        echo "<script type=text/javascript>
    jQuery(document).ready(function(){
        var billing = (function(){
            var tab = {
                views:{ },
                init: function(){
                    tabViewsFactory.hideAll();
                }
            };

            var tabViewsFactory = {
                show: function(){
                    \$('.clearfix').css('display', 'block');
                },
                hideAll: function(){
                    \$('.custom-head').next('.clearfix').css('display', 'none');
                    \$('.custom-head').next('.clearfix').first().css('display', 'block');
                }
            }

            return tab;
        })();


        \$('#company-info-edit').on('click', 'button', editCompanyInfo);
        \$('#contact-info-edit').on('click', 'button', editContactInfo);
        \$('#billing-info').on('click', 'button', editBillingInfo);
        \$('.accept-payment').on('click', 'button', acceptPayment);
        \$('.disable-account').on('click', 'button', disableAccount);

        \$('.active-select').change(considerAmount);
        \$('input[type=\"radio\"]').click(uncheckRadioButton);

        billing.init();

    });

    function uncheckRadioButton() {
        \$('input[name=\"frequency\"]').attr('checked', false);
        \$(this).attr('checked',true);
        \$(this).prop('checked',true);
        considerAmount();
    }

    function considerAmount() {
        console.log('Hey, i am here');
        var frequencies = \$('input[name=\"frequency\"]');
        frequencies.each(function(ind,val){
            if(\$(val).attr('checked') == 'checked'){
                frequency = \$(val).val();
            }
        });

        product = \$('select#product option:selected');

        var attrName;
        var addMonth;

        if(frequency == 0) {
            // monthly
            attrName = 'data-billingMRate';
            addMonth = 1;
        }else {
            // yearly
            attrName = 'data-billingYRate';
            addMonth = 12;
        }

        var expirationDate = \$('#effectiveDate').datepicker('getDate');
        expirationDate.setMonth(expirationDate.getMonth()+addMonth);
        \$('#expirationDate').datepicker('setDate', expirationDate);

        var rate = product.attr(attrName);
        var users = \$('select#usersNumber option:selected').val();

        var amount = rate * users;

        \$('#billingCredit').val(amount.toFixed(2));
    }

    function editBillingInfo(e) {
        product = \$('select#product option:selected');

        var data = {};
        data['billingId'] = ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()), "html", null, true);
        echo ";
        data['subscriptionProduct'] = product.attr('data-billingProduct');
        data['billingLicense'] = \$('#billingLicense').val();
        data['license'] = \$('#usersNumber option:selected').val();
        data['subscriptionStatus'] = \$('#billingStatus').val();
        data['credit'] = \$('#billingCredit').val();
        data['frequency'] = \$(\"input[name='frequency']:checked\").val();
        data['effectiveDate'] = \$(\"#effectiveDate\").val();
        data['expirationDate'] = \$(\"#expirationDate\").val();
        data['creditCardType'] = \$(\"#creditCard\").val();
        data['creditCardName'] = \$(\"#creditCardName\").val();
        data['creditCardAddress'] = \$(\"#creditCardAddress\").val();
        data['creditCardNumber'] = \$(\"#creditCardNumber\").val();
        data['creditCardCity'] = \$(\"#creditCardCity\").val();
        data['creditCardExpirationMonth'] = \$(\"#creditCardExpirationMonth\").val();
        data['creditCardState'] = \$(\"#creditCardState\").val();
        data['creditCardExpirationYear'] = \$(\"#creditCardExpirationYear\").val();
        data['creditCardZip'] = \$(\"#creditCardZip\").val();

        var ajaxUrl = \"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/billingInfo/editBillingInfo\";
        console.log(ajaxUrl);

        \$.ajax(ajaxUrl, {
            'data': data,
            'type': 'POST',
            'success': function (response) {
                window.location.reload();
            },
            'error': function (error) {
                //window.location.reload();
            }
        });
        e.preventDefault();
        return false;
    }

    function editCompanyInfo(e) {
        var data = {};
        data['companyId'] = \"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "id", array()), "html", null, true);
        echo "\";
        data['firstAddr'] = \$('#companyFirstAddress').val();
        data['secondAddr'] = \$('#companySecondAddress').val();
        data['city'] = \$('#companyCity').val();
        data['state'] = \$('#companyState').val();
        data['postalCode'] = \$('#companyPostalCode').val();

        var ajaxUrl = \"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/billingInfo/editCompany\";

        \$.ajax(ajaxUrl, {
            'data': data,
            'type': 'POST',
            'success': function (response) {
                console.log('ajax success');
            },
            'error': function (error) {
                console.log('ajax error');
                console.log(error);
            }
        });
        e.preventDefault();
        return false;
    }

    function editContactInfo(e) {
        \$('span.error').css('display', 'none');
        var data = {};
        data['userId'] = \"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "id", array()), "html", null, true);
        echo "\";
        data['firstName'] = \$('#contactFirstName').val();
        data['lastName'] = \$('#contactLastName').val();
        data['username'] = \$('#contactUsername').val();
        data['email'] = \$('#contactEmail').val();
        data['password'] = \$('#contactPassword').val();
        data['passwordConfirmation'] = \$('#contactPasswordConfirmation').val();

        if(isEmail(data['email']) && isEqualPasswords(data['password'], (data['passwordConfirmation'])) ) {
            var ajaxUrl = \"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/billingInfo/editContact\";
            \$.ajax(ajaxUrl, {
                'data': data,
                'type': 'POST',
                'success': function (response) {
                    console.log('ajax success');
                },
                'error': function (error) {
                    message = error.responseJSON.message;
                    \$('span.error').text(message);
                    \$('span.error').css('display', 'block');
                }
            });
        }

        e.preventDefault();
        return false;
    }


    function acceptPayment(e) {
        var data = {};
        data['companyId'] = ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "id", array()), "html", null, true);
        echo ";
        data['userId'] = ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "id", array()), "html", null, true);
        echo ";

        var ajaxUrl = \"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/billingInfo/acceptPayment\";
        console.log(ajaxUrl);

        \$.ajax(ajaxUrl, {
            'data': data,
            'type': 'POST',
            'success': function (response) {
                messages = response.message;
                console.log(response);
                location.reload();
            },
            'error': function (error) {
                messages = error.responseJSON.message;
                console.log(error);
                \$(messages).each(function(ind, val){
                    \$('div.before-error').after(\"<span class='error'>\"+val+\"</span><br />\");
                });
            }
        });
        e.preventDefault();
        return false;
    }


    function disableAccount(e){
        var data = {};
        data['companyId'] = ";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "id", array()), "html", null, true);
        echo ";
        data['userId'] = ";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "id", array()), "html", null, true);
        echo ";

        var ajaxUrl = \"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/billingInfo/disableAccount\";
        console.log(ajaxUrl);

        \$.ajax(ajaxUrl, {
            'data': data,
            'type': 'POST',
            'success': function (response) {
                messages = response.message;
                console.log(response);
                location.reload();
            },
            'error': function (error) {
                messages = error.responseJSON.message;
                console.log(error);
                \$(messages).each(function(ind, val){
                    \$('div.before-error').after(\"<span class='error'>\"+val+\"</span><br />\");
                });
            }
        });
        e.preventDefault();
        return false;
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        return regex.test(email);
    }

    function isEqualPasswords(\$pass, \$confPass){
        if (\$pass == \$confPass) {
            return true;
        }

        return false;
    }

    function validate(obj) {
        console.log(obj);
        return true;
    }

    // уезжайте, спасайте себя

</script>
";
        
        $__internal_a3e1c1c9411861a31686578f438d869f6348f7abd13316d3b4cf72a82ce51ed9->leave($__internal_a3e1c1c9411861a31686578f438d869f6348f7abd13316d3b4cf72a82ce51ed9_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_show_block_actions_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 213,  264 => 211,  260 => 210,  231 => 184,  226 => 182,  222 => 181,  197 => 159,  185 => 150,  162 => 130,  152 => 123,  130 => 104,  108 => 85,  22 => 1,);
    }
}
/* <script type=text/javascript>*/
/*     jQuery(document).ready(function(){*/
/*         var billing = (function(){*/
/*             var tab = {*/
/*                 views:{ },*/
/*                 init: function(){*/
/*                     tabViewsFactory.hideAll();*/
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
/*                 }*/
/*             }*/
/* */
/*             return tab;*/
/*         })();*/
/* */
/* */
/*         $('#company-info-edit').on('click', 'button', editCompanyInfo);*/
/*         $('#contact-info-edit').on('click', 'button', editContactInfo);*/
/*         $('#billing-info').on('click', 'button', editBillingInfo);*/
/*         $('.accept-payment').on('click', 'button', acceptPayment);*/
/*         $('.disable-account').on('click', 'button', disableAccount);*/
/* */
/*         $('.active-select').change(considerAmount);*/
/*         $('input[type="radio"]').click(uncheckRadioButton);*/
/* */
/*         billing.init();*/
/* */
/*     });*/
/* */
/*     function uncheckRadioButton() {*/
/*         $('input[name="frequency"]').attr('checked', false);*/
/*         $(this).attr('checked',true);*/
/*         $(this).prop('checked',true);*/
/*         considerAmount();*/
/*     }*/
/* */
/*     function considerAmount() {*/
/*         console.log('Hey, i am here');*/
/*         var frequencies = $('input[name="frequency"]');*/
/*         frequencies.each(function(ind,val){*/
/*             if($(val).attr('checked') == 'checked'){*/
/*                 frequency = $(val).val();*/
/*             }*/
/*         });*/
/* */
/*         product = $('select#product option:selected');*/
/* */
/*         var attrName;*/
/*         var addMonth;*/
/* */
/*         if(frequency == 0) {*/
/*             // monthly*/
/*             attrName = 'data-billingMRate';*/
/*             addMonth = 1;*/
/*         }else {*/
/*             // yearly*/
/*             attrName = 'data-billingYRate';*/
/*             addMonth = 12;*/
/*         }*/
/* */
/*         var expirationDate = $('#effectiveDate').datepicker('getDate');*/
/*         expirationDate.setMonth(expirationDate.getMonth()+addMonth);*/
/*         $('#expirationDate').datepicker('setDate', expirationDate);*/
/* */
/*         var rate = product.attr(attrName);*/
/*         var users = $('select#usersNumber option:selected').val();*/
/* */
/*         var amount = rate * users;*/
/* */
/*         $('#billingCredit').val(amount.toFixed(2));*/
/*     }*/
/* */
/*     function editBillingInfo(e) {*/
/*         product = $('select#product option:selected');*/
/* */
/*         var data = {};*/
/*         data['billingId'] = {{ object.id }};*/
/*         data['subscriptionProduct'] = product.attr('data-billingProduct');*/
/*         data['billingLicense'] = $('#billingLicense').val();*/
/*         data['license'] = $('#usersNumber option:selected').val();*/
/*         data['subscriptionStatus'] = $('#billingStatus').val();*/
/*         data['credit'] = $('#billingCredit').val();*/
/*         data['frequency'] = $("input[name='frequency']:checked").val();*/
/*         data['effectiveDate'] = $("#effectiveDate").val();*/
/*         data['expirationDate'] = $("#expirationDate").val();*/
/*         data['creditCardType'] = $("#creditCard").val();*/
/*         data['creditCardName'] = $("#creditCardName").val();*/
/*         data['creditCardAddress'] = $("#creditCardAddress").val();*/
/*         data['creditCardNumber'] = $("#creditCardNumber").val();*/
/*         data['creditCardCity'] = $("#creditCardCity").val();*/
/*         data['creditCardExpirationMonth'] = $("#creditCardExpirationMonth").val();*/
/*         data['creditCardState'] = $("#creditCardState").val();*/
/*         data['creditCardExpirationYear'] = $("#creditCardExpirationYear").val();*/
/*         data['creditCardZip'] = $("#creditCardZip").val();*/
/* */
/*         var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/billingInfo/editBillingInfo";*/
/*         console.log(ajaxUrl);*/
/* */
/*         $.ajax(ajaxUrl, {*/
/*             'data': data,*/
/*             'type': 'POST',*/
/*             'success': function (response) {*/
/*                 window.location.reload();*/
/*             },*/
/*             'error': function (error) {*/
/*                 //window.location.reload();*/
/*             }*/
/*         });*/
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/*     function editCompanyInfo(e) {*/
/*         var data = {};*/
/*         data['companyId'] = "{{ object.creator.company.id }}";*/
/*         data['firstAddr'] = $('#companyFirstAddress').val();*/
/*         data['secondAddr'] = $('#companySecondAddress').val();*/
/*         data['city'] = $('#companyCity').val();*/
/*         data['state'] = $('#companyState').val();*/
/*         data['postalCode'] = $('#companyPostalCode').val();*/
/* */
/*         var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/billingInfo/editCompany";*/
/* */
/*         $.ajax(ajaxUrl, {*/
/*             'data': data,*/
/*             'type': 'POST',*/
/*             'success': function (response) {*/
/*                 console.log('ajax success');*/
/*             },*/
/*             'error': function (error) {*/
/*                 console.log('ajax error');*/
/*                 console.log(error);*/
/*             }*/
/*         });*/
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/*     function editContactInfo(e) {*/
/*         $('span.error').css('display', 'none');*/
/*         var data = {};*/
/*         data['userId'] = "{{ object.creator.id }}";*/
/*         data['firstName'] = $('#contactFirstName').val();*/
/*         data['lastName'] = $('#contactLastName').val();*/
/*         data['username'] = $('#contactUsername').val();*/
/*         data['email'] = $('#contactEmail').val();*/
/*         data['password'] = $('#contactPassword').val();*/
/*         data['passwordConfirmation'] = $('#contactPasswordConfirmation').val();*/
/* */
/*         if(isEmail(data['email']) && isEqualPasswords(data['password'], (data['passwordConfirmation'])) ) {*/
/*             var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/billingInfo/editContact";*/
/*             $.ajax(ajaxUrl, {*/
/*                 'data': data,*/
/*                 'type': 'POST',*/
/*                 'success': function (response) {*/
/*                     console.log('ajax success');*/
/*                 },*/
/*                 'error': function (error) {*/
/*                     message = error.responseJSON.message;*/
/*                     $('span.error').text(message);*/
/*                     $('span.error').css('display', 'block');*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/* */
/*     function acceptPayment(e) {*/
/*         var data = {};*/
/*         data['companyId'] = {{ object.creator.company.id }};*/
/*         data['userId'] = {{ object.creator.id }};*/
/* */
/*         var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/billingInfo/acceptPayment";*/
/*         console.log(ajaxUrl);*/
/* */
/*         $.ajax(ajaxUrl, {*/
/*             'data': data,*/
/*             'type': 'POST',*/
/*             'success': function (response) {*/
/*                 messages = response.message;*/
/*                 console.log(response);*/
/*                 location.reload();*/
/*             },*/
/*             'error': function (error) {*/
/*                 messages = error.responseJSON.message;*/
/*                 console.log(error);*/
/*                 $(messages).each(function(ind, val){*/
/*                     $('div.before-error').after("<span class='error'>"+val+"</span><br />");*/
/*                 });*/
/*             }*/
/*         });*/
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/* */
/*     function disableAccount(e){*/
/*         var data = {};*/
/*         data['companyId'] = {{ object.creator.company.id }};*/
/*         data['userId'] = {{ object.creator.id }};*/
/* */
/*         var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/billingInfo/disableAccount";*/
/*         console.log(ajaxUrl);*/
/* */
/*         $.ajax(ajaxUrl, {*/
/*             'data': data,*/
/*             'type': 'POST',*/
/*             'success': function (response) {*/
/*                 messages = response.message;*/
/*                 console.log(response);*/
/*                 location.reload();*/
/*             },*/
/*             'error': function (error) {*/
/*                 messages = error.responseJSON.message;*/
/*                 console.log(error);*/
/*                 $(messages).each(function(ind, val){*/
/*                     $('div.before-error').after("<span class='error'>"+val+"</span><br />");*/
/*                 });*/
/*             }*/
/*         });*/
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/*     function isEmail(email) {*/
/*         var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;*/
/*         return regex.test(email);*/
/*     }*/
/* */
/*     function isEqualPasswords($pass, $confPass){*/
/*         if ($pass == $confPass) {*/
/*             return true;*/
/*         }*/
/* */
/*         return false;*/
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
