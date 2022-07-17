<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/modal.htm */
class __TwigTemplate_a543062178bd3e7a86b2ccf0ecbd911016f5103edf28c92c077f97b9c9490006 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- background: url(\"../images/home_img.png\") -->
<div id=\"popup\" style=\"display: none; border-radius: 5px; border: var(--border); font-family: 'Montserrat', sans-serif;\" >

    <form name=\"formModealSecvice\"
        id=\"formModealSecvice\"
        data-request=\"onSendService\"
        data-request-validate
        data-request-flash
        data-request-success=\"modalReserForm()\"
        >
        
            <center>
                <img class=\"img\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/giphy2.gif");
        echo "\" alt=\"\" style=\"width: 20rem;\">
            </center>
        
            
            <label for=\"name\"><h3>Ваше ім'я</h3></label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"\" style=\"margin-bottom: 10px; width:300px; border: .1rem solid rgba(192, 149, 133, 0.2);\" 
            required><br>
            
           
            <label for=\"name\"><h3>Email</h3></label>
            <input type=\"email\" id=\"email\" name=\"email\" value=\"\" style=\"margin-bottom: 10px; width:300px; border: .1rem solid rgba(192, 149, 133, 0.2);\"
            required><br>
            <span data-validate-for=\"email\"></span>
            
        
       <div class=\"\">
            
            <label for=\"services\"><h3>Послугa</h3></label>
            
            <select id=\"services\" name=\"service\"
                data-request=\"onGetService\" 
                data-request-update=\"'service/time_date_service': '#time_date_service'\"
                data-track-input
                style=\"width: 300px; height: 20px; border: .1rem solid rgba(192, 149, 133, 0.2);\">
                
                <option value=\"null\">Оберіть послугу</option>  

                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 41
            echo "                
                <option value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "slug", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</option>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
            </select>
           
        </div>
            
        
            
        <div id=\"time_date_service\"></div>
        
       
        <div id=\"master\" style=\"margin-top: 10px;\">
        
            <label for=\"master\"><h3>Майстер</h3></label>
                
            <select id=\"master\" name=\"master\" style=\"width: 300px; height: 20px; border: .1rem solid rgba(192, 149, 133, 0.2);\">
                    
                  <option value=\"null\">Оберіть майстра</option>
                  <option value=\"Оля\">Оля</option>
                  <option value=\"Іра\">Іра</option>
                  <option value=\"Олена\">Олена (власниця)</option>
            
            </select>
        
        </div>    
        
    </form>
    
    <div class=\"navigations\" style=\"margin-top: 20px\">
        <button style=\"border:none; border-radius: 5px; margin:10px; padding:10px; background: #DCDCDC; width:120px; cursor: pointer;\" id=\"close_modal_form\" data-fancybox-close class=\"button\" title=\"close\"><h4>Відмінити</h4></button>
        
        <button style=\"border:none; border-radius: 5px; margin:10px; padding:10px; background: #50E97B; box-shadow: 0 6px 8px 0 rgba(119, 253, 157, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19); color:white; width:120px; cursor: pointer;\" form=\"formModealSecvice\" class=\"button\" title=\"send\"><h4>Забронювати</h4></button>
    </div>
</div>

";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 79
        echo "
<script>
    function modalReserForm() {
        \$('#formModealSecvice').trigger(\"reset\");
        \$('#partialTimeDateService').remove();
        \$('#close_modal_form').click();
    }
</script>

";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 78,  139 => 79,  137 => 78,  101 => 44,  90 => 42,  87 => 41,  83 => 40,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- background: url(\"../images/home_img.png\") -->
<div id=\"popup\" style=\"display: none; border-radius: 5px; border: var(--border); font-family: 'Montserrat', sans-serif;\" >

    <form name=\"formModealSecvice\"
        id=\"formModealSecvice\"
        data-request=\"onSendService\"
        data-request-validate
        data-request-flash
        data-request-success=\"modalReserForm()\"
        >
        
            <center>
                <img class=\"img\" src=\"{{ 'assets/images/giphy2.gif'|theme }}\" alt=\"\" style=\"width: 20rem;\">
            </center>
        
            
            <label for=\"name\"><h3>Ваше ім'я</h3></label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"\" style=\"margin-bottom: 10px; width:300px; border: .1rem solid rgba(192, 149, 133, 0.2);\" 
            required><br>
            
           
            <label for=\"name\"><h3>Email</h3></label>
            <input type=\"email\" id=\"email\" name=\"email\" value=\"\" style=\"margin-bottom: 10px; width:300px; border: .1rem solid rgba(192, 149, 133, 0.2);\"
            required><br>
            <span data-validate-for=\"email\"></span>
            
        
       <div class=\"\">
            
            <label for=\"services\"><h3>Послугa</h3></label>
            
            <select id=\"services\" name=\"service\"
                data-request=\"onGetService\" 
                data-request-update=\"'service/time_date_service': '#time_date_service'\"
                data-track-input
                style=\"width: 300px; height: 20px; border: .1rem solid rgba(192, 149, 133, 0.2);\">
                
                <option value=\"null\">Оберіть послугу</option>  

                {% for service in services %}
                
                <option value=\"{{ service.slug }}\">{{ service.title }}</option>
                    
                {% endfor %} 
            </select>
           
        </div>
            
        
            
        <div id=\"time_date_service\"></div>
        
       
        <div id=\"master\" style=\"margin-top: 10px;\">
        
            <label for=\"master\"><h3>Майстер</h3></label>
                
            <select id=\"master\" name=\"master\" style=\"width: 300px; height: 20px; border: .1rem solid rgba(192, 149, 133, 0.2);\">
                    
                  <option value=\"null\">Оберіть майстра</option>
                  <option value=\"Оля\">Оля</option>
                  <option value=\"Іра\">Іра</option>
                  <option value=\"Олена\">Олена (власниця)</option>
            
            </select>
        
        </div>    
        
    </form>
    
    <div class=\"navigations\" style=\"margin-top: 20px\">
        <button style=\"border:none; border-radius: 5px; margin:10px; padding:10px; background: #DCDCDC; width:120px; cursor: pointer;\" id=\"close_modal_form\" data-fancybox-close class=\"button\" title=\"close\"><h4>Відмінити</h4></button>
        
        <button style=\"border:none; border-radius: 5px; margin:10px; padding:10px; background: #50E97B; box-shadow: 0 6px 8px 0 rgba(119, 253, 157, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19); color:white; width:120px; cursor: pointer;\" form=\"formModealSecvice\" class=\"button\" title=\"send\"><h4>Забронювати</h4></button>
    </div>
</div>

{% put scripts %}

<script>
    function modalReserForm() {
        \$('#formModealSecvice').trigger(\"reset\");
        \$('#partialTimeDateService').remove();
        \$('#close_modal_form').click();
    }
</script>

{% endput %}", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/modal.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 40, "put" => 78);
        static $filters = array("theme" => 13, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'put'],
                ['theme', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
