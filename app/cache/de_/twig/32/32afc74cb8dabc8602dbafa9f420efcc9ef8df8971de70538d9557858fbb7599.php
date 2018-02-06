<?php

/* ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock.html.twig */
class __TwigTemplate_d5eb78e32fcd297f54bbef111be5dfffab60458cbb61186e3366fe2b2fbf37db extends Twig_Template
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
        $__internal_7c57627183482e405bc3148978acd01f0bf9cf02009934690e89edb245335a53 = $this->env->getExtension("native_profiler");
        $__internal_7c57627183482e405bc3148978acd01f0bf9cf02009934690e89edb245335a53->enter($__internal_7c57627183482e405bc3148978acd01f0bf9cf02009934690e89edb245335a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock.html.twig"));

        // line 1
        echo "<div class=\"group-forms\">
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"text\" id=\"name\" name=\"driver_name[\$\$name\$\$]\" class=\"form-control\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) : ("")), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">DOB</label>
        <input type=\"text\" id=\"dob\" name=\"driver_dob[\$\$name\$\$]\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("dob", $context)) ? (twig_date_format_filter($this->env, (isset($context["dob"]) ? $context["dob"] : $this->getContext($context, "dob")), "M d, Y")) : ("")), "html", null, true);
        echo "\" class=\"form-control datepicker-product\"/>
    </div>
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"compaign\">License</label>
            <input type=\"text\" id=\"compaign\" name=\"driver_license[\$\$name\$\$]\" class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("license", $context)) ? ((isset($context["license"]) ? $context["license"] : $this->getContext($context, "license"))) : ("")), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">Age Licensed</label>
            <input type=\"number\" id=\"compaign\" name=\"driver_ageLicensed[\$\$name\$\$] \" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("ageLicensed", $context)) ? ((isset($context["ageLicensed"]) ? $context["ageLicensed"] : $this->getContext($context, "ageLicensed"))) : ("")), "html", null, true);
        echo "\" />
        </div>
    </div>
    ";
        // line 20
        if ( !twig_test_empty((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")))) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 22
                echo "            <div class=\"tickets-group\" data-prototype-field=\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect")), "js"), "html", null, true);
                echo "\">
                ";
                // line 23
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect", array("first" => (($this->getAttribute($context["loop"], "first", array())) ? (true) : (false)), "activeValue" => $context["ticket"])));
                echo "
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        <div class=\"tickets-group\" data-prototype-field=\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect", array("activeValue" => ((array_key_exists("tickets", $context)) ? ((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets"))) : (""))))), "js"), "html", null, true);
            echo "\">
            ";
            // line 28
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect", array("first" => true)));
            echo "
        </div>
    ";
        }
        // line 31
        echo "
    <input type=\"hidden\" class=\"driverId\" name=\"driverId[\$\$name\$\$]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("driverId", $context)) ? ((isset($context["driverId"]) ? $context["driverId"] : $this->getContext($context, "driverId"))) : ("")), "html", null, true);
        echo "\" />
    ";
        // line 33
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig", "ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock.html.twig", 33)->display(array_merge($context, array("empty" => (isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")), "singleEmpty" => (isset($context["singleEmpty"]) ? $context["singleEmpty"] : $this->getContext($context, "singleEmpty")), "last" => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "save" => false)));
        // line 34
        echo "
</div>";
        
        $__internal_7c57627183482e405bc3148978acd01f0bf9cf02009934690e89edb245335a53->leave($__internal_7c57627183482e405bc3148978acd01f0bf9cf02009934690e89edb245335a53_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  118 => 33,  114 => 32,  111 => 31,  105 => 28,  100 => 27,  97 => 26,  80 => 23,  75 => 22,  57 => 21,  55 => 20,  49 => 17,  42 => 13,  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* <div class="group-forms">*/
/*     <div class="form-group">*/
/*         <label for="name">Name</label>*/
/*         <input type="text" id="name" name="driver_name[$$name$$]" class="form-control" value="{{ name is defined ?  name  : '' }}" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">DOB</label>*/
/*         <input type="text" id="dob" name="driver_dob[$$name$$]" value="{{ dob is defined ?  dob|date('M d, Y')  : '' }}" class="form-control datepicker-product"/>*/
/*     </div>*/
/*     <div class="form-group row">*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">License</label>*/
/*             <input type="text" id="compaign" name="driver_license[$$name$$]" class="form-control" value="{{ license is defined ?  license  : '' }}" />*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">Age Licensed</label>*/
/*             <input type="number" id="compaign" name="driver_ageLicensed[$$name$$] " class="form-control" value="{{ ageLicensed is defined ?  ageLicensed  : '' }}" />*/
/*         </div>*/
/*     </div>*/
/*     {% if tickets is not empty %}*/
/*         {% for ticket in tickets %}*/
/*             <div class="tickets-group" data-prototype-field="{{  render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect'))|e('js') }}">*/
/*                 {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect', { 'first': loop.first ? true : false, 'activeValue': ticket } )) }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         <div class="tickets-group" data-prototype-field="{{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect', { 'activeValue': tickets is defined ?  tickets : '' } ))|e('js') }}">*/
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationTicketsSelect', { 'first': true } )) }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <input type="hidden" class="driverId" name="driverId[$$name$$]" value="{{ driverId is defined ?  driverId  : '' }}" />*/
/*     {% include('ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig') with {'empty': empty, 'singleEmpty': singleEmpty, 'last': last, 'save': false} %}*/
/* */
/* </div>*/
