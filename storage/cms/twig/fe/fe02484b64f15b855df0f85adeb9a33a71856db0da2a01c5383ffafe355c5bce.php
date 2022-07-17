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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/footer.htm */
class __TwigTemplate_c245b3b8dfc4d65ed3944753312980008c22a057d526d326f8fe213e1bab803f extends \Twig\Template
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
        echo "<section class=\"footer\">

    <div class=\"box-container\">

        <div class=\"box\">
            <a href=\"#\" class=\"logo\">  
                <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"\" style=\"width: 20rem;\"> 
            </a>
        </div>


        <div class=\"box\">
            <h3>Швидкі лінки</h3>
            <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"> <i class=\"fas fa-chevron-right\"></i> Головна </a>
            <a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#services\"> <i class=\"fas fa-chevron-right\"></i> Послуги </a>
            <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#masters\"> <i class=\"fas fa-chevron-right\"></i> Майстри </a>
            <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#review\"> <i class=\"fas fa-chevron-right\"></i> Відгуки </a>
        </div>


        <div class=\"box\">
            <h3>Контакти</h3>
            <a href=\"#\"> <i class=\"fas fa-phone\"></i> +123-456-7890 </a>
            <a href=\"#\"> <i class=\"fas fa-phone\"></i> +111-222-3333 </a>
            <a href=\"#\"> <i class=\"fas fa-envelope\"></i> mailmail@gmail.com </a>
            <a href=\"#\"> <i class=\"fas fa-envelope\"></i> emailemail@gmail.com </a>
            <a href=\"#\"> <i class=\"fas fa-map-marker-alt\"></i> Львів, Україна - 79057 </a>
        </div>

        <div class=\"box\">
            <h3>Соц. мережі</h3>
            <a href=\"#\"> <i class=\"fab fa-facebook-f\"></i> facebook </a>
            <a href=\"#\"> <i class=\"fab fa-twitter\"></i> twitter </a>
            <a href=\"#\"> <i class=\"fab fa-instagram\"></i> instagram </a>
            <a href=\"#\"> <i class=\"fab fa-linkedin\"></i> linkedin </a>
            <a href=\"#\"> <i class=\"fab fa-pinterest\"></i> pinterest </a>
        </div>

    </div>

    <div class=\"credit\"> created by <span>tanyaivatt</span> | all rights reserved </div>

</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  65 => 16,  61 => 15,  57 => 14,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"footer\">

    <div class=\"box-container\">

        <div class=\"box\">
            <a href=\"#\" class=\"logo\">  
                <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"\" style=\"width: 20rem;\"> 
            </a>
        </div>


        <div class=\"box\">
            <h3>Швидкі лінки</h3>
            <a href=\"{{ 'home'|page }}\"> <i class=\"fas fa-chevron-right\"></i> Головна </a>
            <a href=\"{{ 'home'|page }}#services\"> <i class=\"fas fa-chevron-right\"></i> Послуги </a>
            <a href=\"{{ 'home'|page }}#masters\"> <i class=\"fas fa-chevron-right\"></i> Майстри </a>
            <a href=\"{{ 'home'|page }}#review\"> <i class=\"fas fa-chevron-right\"></i> Відгуки </a>
        </div>


        <div class=\"box\">
            <h3>Контакти</h3>
            <a href=\"#\"> <i class=\"fas fa-phone\"></i> +123-456-7890 </a>
            <a href=\"#\"> <i class=\"fas fa-phone\"></i> +111-222-3333 </a>
            <a href=\"#\"> <i class=\"fas fa-envelope\"></i> mailmail@gmail.com </a>
            <a href=\"#\"> <i class=\"fas fa-envelope\"></i> emailemail@gmail.com </a>
            <a href=\"#\"> <i class=\"fas fa-map-marker-alt\"></i> Львів, Україна - 79057 </a>
        </div>

        <div class=\"box\">
            <h3>Соц. мережі</h3>
            <a href=\"#\"> <i class=\"fab fa-facebook-f\"></i> facebook </a>
            <a href=\"#\"> <i class=\"fab fa-twitter\"></i> twitter </a>
            <a href=\"#\"> <i class=\"fab fa-instagram\"></i> instagram </a>
            <a href=\"#\"> <i class=\"fab fa-linkedin\"></i> linkedin </a>
            <a href=\"#\"> <i class=\"fab fa-pinterest\"></i> pinterest </a>
        </div>

    </div>

    <div class=\"credit\"> created by <span>tanyaivatt</span> | all rights reserved </div>

</section>", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7, "page" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
