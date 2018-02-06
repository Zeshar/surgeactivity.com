<?php

/* ZesharCRMCoreBundle:Goal:index.html.twig */
class __TwigTemplate_e1aac3bac7dc83a391e3bc0558e22a66bc6e24662f509c892444258004a1a7ce extends Twig_Template
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
        $__internal_7c012fa832be42922a0072a3cf23c277083a8cd8a4517ef413e7dbce7a5ed0da = $this->env->getExtension("native_profiler");
        $__internal_7c012fa832be42922a0072a3cf23c277083a8cd8a4517ef413e7dbce7a5ed0da->enter($__internal_7c012fa832be42922a0072a3cf23c277083a8cd8a4517ef413e7dbce7a5ed0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Goal:index.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success_message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-success\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 8
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <table>
        <tr>
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "</td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</td>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</td>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goalCategory", array()), 'label');
        echo "</td>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goalCategory", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimated", array()), 'label');
        echo "</td>
            <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimated", array()), 'widget');
        echo "</td>
        </tr>

        ";
        // line 34
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array(), "any", true, true)) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
            echo "</td>
            <td>";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget');
            echo "</td>
        </tr>
        ";
        }
        // line 40
        echo "
        <tr>
            <td></td>
            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "create", array()), 'widget');
        echo "</td>
        </tr>
    </table>
";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_7c012fa832be42922a0072a3cf23c277083a8cd8a4517ef413e7dbce7a5ed0da->leave($__internal_7c012fa832be42922a0072a3cf23c277083a8cd8a4517ef413e7dbce7a5ed0da_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Goal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  133 => 43,  128 => 40,  122 => 37,  118 => 36,  115 => 35,  113 => 34,  107 => 31,  103 => 30,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  77 => 19,  73 => 18,  67 => 15,  63 => 14,  57 => 11,  54 => 10,  45 => 8,  41 => 7,  38 => 6,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('success_message') %}*/
/*     <div class="alert alert-success">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/* <ul>*/
/*     {% for error in errors %}*/
/*         <li>{{ error.message }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {{ form_start(form) }}*/
/*     <table>*/
/*         <tr>*/
/*             <td>{{ form_label(form.title) }}</td>*/
/*             <td>{{ form_widget(form.title) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.description) }}</td>*/
/*             <td>{{ form_widget(form.description) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.type) }}</td>*/
/*             <td>{{ form_widget(form.type) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.goalCategory) }}</td>*/
/*             <td>{{ form_widget(form.goalCategory) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.estimated) }}</td>*/
/*             <td>{{ form_widget(form.estimated) }}</td>*/
/*         </tr>*/
/* */
/*         {% if form.users  is defined %}*/
/*         <tr>*/
/*             <td>{{ form_label(form.users) }}</td>*/
/*             <td>{{ form_widget(form.users) }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/* */
/*         <tr>*/
/*             <td></td>*/
/*             <td>{{ form_widget(form.create) }}</td>*/
/*         </tr>*/
/*     </table>*/
/* {{ form_end(form) }}*/
/* */
