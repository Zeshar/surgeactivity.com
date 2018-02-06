<?php

/* ZesharCRMCoreBundle:Widget:need.html.twig */
class __TwigTemplate_5d75b2df5215677ff406d03d9694ae8bddbeb4d09a1531f34504d01e2768fee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e5aa06f618a42de176ecdccf7a542ec6343e128faf2ca39a58770ba0b255a7 = $this->env->getExtension("native_profiler");
        $__internal_c0e5aa06f618a42de176ecdccf7a542ec6343e128faf2ca39a58770ba0b255a7->enter($__internal_c0e5aa06f618a42de176ecdccf7a542ec6343e128faf2ca39a58770ba0b255a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:need.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_c0e5aa06f618a42de176ecdccf7a542ec6343e128faf2ca39a58770ba0b255a7->leave($__internal_c0e5aa06f618a42de176ecdccf7a542ec6343e128faf2ca39a58770ba0b255a7_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_3e834d8a6e8c3300cfbf573884221a5c325a601038665ed76dcbe6643b5ad8b5 = $this->env->getExtension("native_profiler");
        $__internal_3e834d8a6e8c3300cfbf573884221a5c325a601038665ed76dcbe6643b5ad8b5->enter($__internal_3e834d8a6e8c3300cfbf573884221a5c325a601038665ed76dcbe6643b5ad8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    <div class=\"box\" style=\"margin:10px auto\">
        <div class=\"box-body \">
            ";
        // line 4
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")))) {
            // line 5
            echo "                <select class=\"user_data\">
                    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 7
                echo "                        <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : $this->getContext($context, "selectedUser")) == $this->getAttribute($context["person"], "username", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "                </select>
            ";
        }
        // line 11
        echo "            <table class=\"table\" style=\"border: solid 1px darkgrey;border-collapse: collapse; width: 96%;margin:3px\">
                 <thead>
                   <tr>
                       <th>Title</th>
                   </tr>
                 </thead>
                 <tbody>
                 ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 19
            echo "                     <tr >
                         <td style=\"border: 1px solid darkgrey;padding: 5px\" >";
            // line 20
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
                         <td style=\"border: 1px solid darkgrey;padding: 5px\" >";
            // line 21
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
                     </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                 </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_3e834d8a6e8c3300cfbf573884221a5c325a601038665ed76dcbe6643b5ad8b5->leave($__internal_3e834d8a6e8c3300cfbf573884221a5c325a601038665ed76dcbe6643b5ad8b5_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:need.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  85 => 21,  81 => 20,  78 => 19,  74 => 18,  65 => 11,  61 => 9,  48 => 7,  44 => 6,  41 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="box" style="margin:10px auto">*/
/*         <div class="box-body ">*/
/*             {% if persons is not empty %}*/
/*                 <select class="user_data">*/
/*                     {% for person in persons %}*/
/*                         <option {% if selectedUser == person.username %} selected {% endif %}>{{ person.username}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             {% endif %}*/
/*             <table class="table" style="border: solid 1px darkgrey;border-collapse: collapse; width: 96%;margin:3px">*/
/*                  <thead>*/
/*                    <tr>*/
/*                        <th>Title</th>*/
/*                    </tr>*/
/*                  </thead>*/
/*                  <tbody>*/
/*                  {% for key, value in data %}*/
/*                      <tr >*/
/*                          <td style="border: 1px solid darkgrey;padding: 5px" >{{ key }}</td>*/
/*                          <td style="border: 1px solid darkgrey;padding: 5px" >{{ value }}</td>*/
/*                      </tr>*/
/*                  {% endfor %}*/
/*                  </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
