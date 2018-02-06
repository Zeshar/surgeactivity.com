<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_24fa65c6a3dd296d7a55613594ced0c116b11d59f8049f7834fb000a53bf2f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c15d03d7c4d5095a3f12f2e37762b59f4b45d9a7e77114ce7581204505f6704 = $this->env->getExtension("native_profiler");
        $__internal_7c15d03d7c4d5095a3f12f2e37762b59f4b45d9a7e77114ce7581204505f6704->enter($__internal_7c15d03d7c4d5095a3f12f2e37762b59f4b45d9a7e77114ce7581204505f6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_7c15d03d7c4d5095a3f12f2e37762b59f4b45d9a7e77114ce7581204505f6704->leave($__internal_7c15d03d7c4d5095a3f12f2e37762b59f4b45d9a7e77114ce7581204505f6704_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_8080f9e5ec1df5e58aafc8e6a7769b8a0f8fda246585be6a5deb9706e10b9577 = $this->env->getExtension("native_profiler");
        $__internal_8080f9e5ec1df5e58aafc8e6a7769b8a0f8fda246585be6a5deb9706e10b9577->enter($__internal_8080f9e5ec1df5e58aafc8e6a7769b8a0f8fda246585be6a5deb9706e10b9577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8080f9e5ec1df5e58aafc8e6a7769b8a0f8fda246585be6a5deb9706e10b9577->leave($__internal_8080f9e5ec1df5e58aafc8e6a7769b8a0f8fda246585be6a5deb9706e10b9577_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
