<?php

/* ZesharCRMCoreBundle:Dashboard:index.html.twig */
class __TwigTemplate_16943ba0a993bde3e438104993fa87fc51a2ddee52fff45be9b5456c3759bcdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ZesharCRMCoreBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'left_column' => array($this, 'block_left_column'),
            'widget_list' => array($this, 'block_widget_list'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04a78ad990a430639088937b7caded0ca8a88f03592a805442a8bc391719f406 = $this->env->getExtension("native_profiler");
        $__internal_04a78ad990a430639088937b7caded0ca8a88f03592a805442a8bc391719f406->enter($__internal_04a78ad990a430639088937b7caded0ca8a88f03592a805442a8bc391719f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a78ad990a430639088937b7caded0ca8a88f03592a805442a8bc391719f406->leave($__internal_04a78ad990a430639088937b7caded0ca8a88f03592a805442a8bc391719f406_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56380edaa58ec55cd591213f903bcb6034cdebcee14ed2233d0051c1db1a3e85 = $this->env->getExtension("native_profiler");
        $__internal_56380edaa58ec55cd591213f903bcb6034cdebcee14ed2233d0051c1db1a3e85->enter($__internal_56380edaa58ec55cd591213f903bcb6034cdebcee14ed2233d0051c1db1a3e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_56380edaa58ec55cd591213f903bcb6034cdebcee14ed2233d0051c1db1a3e85->leave($__internal_56380edaa58ec55cd591213f903bcb6034cdebcee14ed2233d0051c1db1a3e85_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_336eb0ac632bf7f287e5635b5de82898a416a89cd34e9ce086671ae2c0c7f792 = $this->env->getExtension("native_profiler");
        $__internal_336eb0ac632bf7f287e5635b5de82898a416a89cd34e9ce086671ae2c0c7f792->enter($__internal_336eb0ac632bf7f287e5635b5de82898a416a89cd34e9ce086671ae2c0c7f792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_336eb0ac632bf7f287e5635b5de82898a416a89cd34e9ce086671ae2c0c7f792->leave($__internal_336eb0ac632bf7f287e5635b5de82898a416a89cd34e9ce086671ae2c0c7f792_prof);

    }

    // line 6
    public function block_left_column($context, array $blocks = array())
    {
        $__internal_3f9731f8b018eeb58b2e77e8ad038aa4e33b9cbdcc67a89e57c895eb708d7993 = $this->env->getExtension("native_profiler");
        $__internal_3f9731f8b018eeb58b2e77e8ad038aa4e33b9cbdcc67a89e57c895eb708d7993->enter($__internal_3f9731f8b018eeb58b2e77e8ad038aa4e33b9cbdcc67a89e57c895eb708d7993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_column"));

        // line 7
        echo "    <div class=\"table-wrap\" data-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "\">
        <div class=\"drop\" default_user=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")), "html", null, true);
        echo "\">
        </div>
    </div>
    ";
        // line 11
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")))) {
            // line 12
            echo "        <select class=\"user_data\" style=\"display: none\">
            <option></option>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 15
                echo "                <option>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </select>
    ";
        }
        // line 19
        echo "
    <style>
        .table-wrap .custom-block {
            height: auto!important;
        }
    </style>
";
        
        $__internal_3f9731f8b018eeb58b2e77e8ad038aa4e33b9cbdcc67a89e57c895eb708d7993->leave($__internal_3f9731f8b018eeb58b2e77e8ad038aa4e33b9cbdcc67a89e57c895eb708d7993_prof);

    }

    // line 27
    public function block_widget_list($context, array $blocks = array())
    {
        $__internal_7e1df969096d9ebaf7b7559061bb315c3ff337c67445eef2705b42658118321c = $this->env->getExtension("native_profiler");
        $__internal_7e1df969096d9ebaf7b7559061bb315c3ff337c67445eef2705b42658118321c->enter($__internal_7e1df969096d9ebaf7b7559061bb315c3ff337c67445eef2705b42658118321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_list"));

        // line 28
        echo "    <select class=\"custom-select widget\">
        <option></option>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : $this->getContext($context, "widgets")));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 31
            echo "        <option name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
            echo "\" data_x=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "width", array()), "html", null, true);
            echo "\" data_y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "height", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </select>
";
        
        $__internal_7e1df969096d9ebaf7b7559061bb315c3ff337c67445eef2705b42658118321c->leave($__internal_7e1df969096d9ebaf7b7559061bb315c3ff337c67445eef2705b42658118321c_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52bee7a141808004e594211f496317c3c0d993121f5177bec93a2f4409d317ca = $this->env->getExtension("native_profiler");
        $__internal_52bee7a141808004e594211f496317c3c0d993121f5177bec93a2f4409d317ca->enter($__internal_52bee7a141808004e594211f496317c3c0d993121f5177bec93a2f4409d317ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/css/sonata_fixes.css"), "html", null, true);
        echo "\"  />
";
        
        $__internal_52bee7a141808004e594211f496317c3c0d993121f5177bec93a2f4409d317ca->leave($__internal_52bee7a141808004e594211f496317c3c0d993121f5177bec93a2f4409d317ca_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c2ef1e7a7367ebc5fed237d1844f4bd0f77535f590351435a3a16b40aa9f75d = $this->env->getExtension("native_profiler");
        $__internal_7c2ef1e7a7367ebc5fed237d1844f4bd0f77535f590351435a3a16b40aa9f75d->enter($__internal_7c2ef1e7a7367ebc5fed237d1844f4bd0f77535f590351435a3a16b40aa9f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    ";
        // line 41
        echo "    <script src=\"https://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/dashboard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7c2ef1e7a7367ebc5fed237d1844f4bd0f77535f590351435a3a16b40aa9f75d->leave($__internal_7c2ef1e7a7367ebc5fed237d1844f4bd0f77535f590351435a3a16b40aa9f75d_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 42,  180 => 41,  178 => 40,  172 => 39,  162 => 37,  156 => 36,  148 => 33,  131 => 31,  127 => 30,  123 => 28,  117 => 27,  104 => 19,  100 => 17,  91 => 15,  87 => 14,  83 => 12,  81 => 11,  75 => 8,  69 => 7,  63 => 6,  51 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Dashboard{% endblock %}*/
/* {% block page_title %}Dashboard{% endblock %}*/
/* */
/* {% block left_column %}*/
/*     <div class="table-wrap" data-url="{{ app.request.getSchemeAndHttpHost()}}{{ app.request.getBaseURL() }}">*/
/*         <div class="drop" default_user="{{ userName }}">*/
/*         </div>*/
/*     </div>*/
/*     {% if persons is not empty %}*/
/*         <select class="user_data" style="display: none">*/
/*             <option></option>*/
/*             {% for person in persons %}*/
/*                 <option>{{ person.username}}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     {% endif %}*/
/* */
/*     <style>*/
/*         .table-wrap .custom-block {*/
/*             height: auto!important;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block widget_list %}*/
/*     <select class="custom-select widget">*/
/*         <option></option>*/
/*         {% for widget in widgets %}*/
/*         <option name="{{ widget.title }}" value="{{ widget.title }}" data_x="{{ widget.width }}" data_y="{{ widget.height }}" >{{ widget.title }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmcore/css/sonata_fixes.css') }}"  />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {#<script src="http://code.jquery.com/jquery-1.10.2.js"></script>#}*/
/*     <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>*/
/*     <script src="{{ asset('bundles/zesharcrmcore/js/dashboard.js') }}"></script>*/
/* {% endblock %}*/
